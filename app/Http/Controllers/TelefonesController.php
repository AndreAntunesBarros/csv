<?php

namespace csv_creator\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Writer;

class TelefonesController extends Controller
{
        
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $header = ['name', 'mobile', 'number'];

        $a = explode(PHP_EOL, $request->textAreaNome);
        $b = explode(PHP_EOL, $request->textAreaCelular);
        $c = explode(PHP_EOL, $request->textAreaFixo);            

        $records = array_map(function ($a, $b, $c) { return explode(',', "$a,$b,$c"); }, $a, $b, $c);
        
        for ($i=0; $i < sizeof($records) ; $i++) { 
            $records[$i] = str_replace("\r", '', $records[$i]);
        }

        //dd($records);        

        //load the CSV document from a string
        $csv = Writer::createFromString('');

        //insert the header
        $csv->insertOne($header);
        
        //insert all the records
        $csv->insertAll($records);

        $csv->output('orders.csv');
                       
    }
    
}
