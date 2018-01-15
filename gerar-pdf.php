<?php
require_once 'classes/dompdf/lib/html5lib/Parser.php';
require_once 'classes/dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'classes/dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();

use Dompdf\Dompdf;

    // Template com o conteúdo 
    $templateHTML = 'conteudo-pdf.php';

    function gerarPDF($templateHTML){
        ob_start();
        include $templateHTML;
        $conteudo = ob_get_clean(); 

        if ($conteudo !== false){
            $dompdf = new Dompdf();
            $dompdf->load_html($conteudo);
            $dompdf->set_paper("A4", "portrail");
            $dompdf->render();
            $dompdf->stream("relatorio.pdf");
        }
    }

    gerarPDF($templateHTML);

