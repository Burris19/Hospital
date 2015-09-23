<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Repositories\BallotRepo;
use App\Repositories\BallotDetailRepo;
use App\Repositories\PdfRepo;
use Imagick;
class BallotsController extends CrudController {

    protected $module = '_ballots';
    protected $ballotDetailRepo;
    protected $pdfRepo;

    function __construct(BallotRepo $ballotRepo,
                         BallotDetailRepo $ballotDetailRepo,
                         PdfRepo $pdfRepo)
    {
        $this->repo = $ballotRepo;
        $this->ballotDetailRepo = $ballotDetailRepo;
        $this->pdfRepo= $pdfRepo;
    }

    //Devuelve la vista de crear
    public function create()
    {
        return view($this->root . '/' . $this->module . '/create');
    }


    //Guarda la vista de contra-boleta
    public function  detailBallotSave()
    {

         $data = \Request::all();
         $modelo = new BallotDetailRepo();
         $ballotDetail = $modelo->findByField('idBallot',$data['idBallot']);

         //Obtener los datos para volver a general la boleta
         $modelo = new PdfRepo();
         $datosPdf = $modelo->findByField('idBallot',$data['idBallot']);

         $modelo = new BallotRepo();
         $ballot = $modelo->findOrFail($data['idBallot']);


         $folder = 'pdfs';

         if (!is_dir($folder))
         {
             // Create directory
             $oldmask = umask(0);
             mkdir($folder, 0777);
             umask($oldmask);
         }

         $ballot->state = 1;
         $ballot->save();
         $ballotDetail->url = $folder . '/' . '45' . $ballotDetail->id . '.pdf';
         $ballotDetail->save();

         $pdf_factory = \App::make('dompdf');
         $pdf = $pdf_factory->loadView('detailBallot',compact('data','ballotDetail','ballot','datosPdf'))->save($ballotDetail->url);

         return [
             'message' => 'Boleta generada exitosamente',
             'success' => true,
             'id' =>  $ballotDetail->id
         ];

     }

    //Guarda la vista de la boleta
    public function store(Request $request)
    {
        $data = $request->all();

        $data = array_map(function($item){
            return ($item == '' ? '-----' : $item);
        }, $data);
        $ballot_data['name'] = \Request::get('Group1Dato4');
        $ballot_data['place'] = \request::get('Group1Dato1');
        $ballot_data['id_user'] = \Auth::id();
        $ballot_data['sentroReferido'] = \REquest::get('Group1Dato2');
        $ballot_data['fullname'] = \REquest::get('Group1Dato4');
        $ballot_data['edad'] = \REquest::get('Group1Dato8');
        $ballot_data['sexo'] = \REquest::get('Group1Dato9');
        $ballot = $this->repo->create($ballot_data);

        $detailBallot['idBallot'] = $ballot->id;
        $detailBallot['id_user'] = \Auth::id();
        $this->ballotDetailRepo->create($detailBallot);

        $data['idBallot'] = $ballot->id;
        $this->pdfRepo->create($data);

        $folder = 'pdfs';

        if (!is_dir($folder))
        {
            // Create directory
            $oldmask = umask(0);
            mkdir($folder, 0777);
            umask($oldmask);
        }

        $ballot->url = $folder . '/' . $ballot->id . '.pdf';
        $ballot->save();

        $pdf_factory = \App::make('dompdf');
        $pdf = $pdf_factory->loadView('pdf',compact('data'))->save($ballot->url);

        return [
            'message' => 'Boleta generada exitosamente',
            'success' => true,
            'id' =>  $ballot->id
        ];

    }


    //Obtniene el pdf de la boleta
    public function getPDF($id)
    {
        $pdf = $this->repo->findOrFail($id);
        $file = file_get_contents(public_path() . '/' . $pdf->url);
        return response($file,200)->header('Content-Type','application/pdf');
    }

    //obteniene la imagen del pdf
    public function getImagen($id)
    {
        $pdf = $this->repo->findOrFail($id);
        $im = new Imagick();
        $im->setResolution(100, 100);
        $im->readImage('pdfs/1.pdf[0]');
        $im->setImageFormat('png');
        header('Content-Type: image/png');
        return $im;

    }

    //obtine el pdf de la contra-boleta
    public function getPDF2($id)
    {
        $pdf =  $this->ballotDetailRepo->findByField('idBallot',$id);
        $file = file_get_contents(public_path() . '/' . $pdf->url);
        return response($file,200)->header('Content-Type','application/pdf');
    }

    public function getDetailPDF($id)
    {
        $pdf = $this->ballotDetailRepo->findOrFail($id);
        $file = file_get_contents(public_path() . '/' . $pdf->url);
        return response($file,200)->header('Content-Type','application/pdf');
    }

    //Devuelve la vista de llenar la contra-boleta
    public function detailBallot($id)
    {
        return view($this->root . '/' . $this->module  .'/detailBallot', array("id" => $id));
    }

}
