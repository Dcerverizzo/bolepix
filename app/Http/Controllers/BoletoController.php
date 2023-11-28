<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use OpenBoleto\Banco\BancoDoBrasil;
use OpenBoleto\Agente;
use DateTime;

class BoletoController extends Controller
{

    public function index()
    {
        return View::make('formulario');
    }

    public function gerarBoleto()
    {

        $sacado = new Agente('Daniel Cerverizzo', '023.434.234-34', 'ABC 302 Bloco N', '72000-000', 'Brasília', 'DF');
        $cedente = new Agente('Empresa de cosméticos LTDA', '02.123.123/0001-11', 'CLS 403 Lj 23', '71000-000', 'Brasília', 'DF');

        $boleto = new BancoDoBrasil(array(
            'dataVencimento' => new DateTime('2013-01-24'),
            'valor' => 23.00,
            'sequencial' => 1234567,
            'sacado' => $sacado,
            'cedente' => $cedente,
            'agencia' => 1724,
            'carteira' => 18,
            'conta' => 10403005,
            'convenio' => 1234,
        ));

        echo $boleto->getOutput();
    }
}
