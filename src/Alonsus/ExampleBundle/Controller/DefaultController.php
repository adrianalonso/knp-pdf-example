<?php

namespace Alonsus\ExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
       
        $html = $this->renderView('AlonsusExampleBundle:Default:index.html.twig', array());


        $pdf= $this->get('knp_snappy.pdf')->getOutputFromHtml($html, array(
                             
                'ignore-load-errors'           => null, // old v0.9
                    'lowquality'                   => false,
                    'collate'                      => null,
                    'no-collate'                   => null,
                    'cookie-jar'                   => null,
                    'copies'                       => null,
                    'dpi'                          => null,
                    'extended-help'                => null,
                    'grayscale'                    => false,
                    'help'                         => null,
                    'htmldoc'                      => null,
                    'image-dpi'                    => null,
                    'image-quality'                => null,
                    'manpage'                      => null,
                    'margin-bottom'                => 0,
                    'margin-left'                  => 0,
                    'margin-right'                 => 0,
                    'margin-top'                   => 0,
                    'orientation'                  => null,
                    'output-format'                => null,
                    'page-height'                  => null,
                    'page-size'                    => "A4",
                    'page-width'                   => null,
                    'no-pdf-compression'           => null,
                    'quiet'                        => null,
                    'read-args-from-stdin'         => null,
                    'title'                        => null,
                    'use-xserver'                  => null,
                    'version'                      => null,
                    'dump-default-toc-xsl'         => null,
                    'dump-outline'                 => null,
                    'outline'                      => null,
                    'no-outline'                   => null,
                    'outline-depth'                => null,
                    'allow'                        => null,
                    'background'                   => null,
                    'no-background'                => null,
                    'checkbox-checked-svg'         => null,
                    'checkbox-svg'                 => null,
                    'cookie'                       => null,
                    'custom-header'                => null,
                    'custom-header-propagation'    => null,
                    'no-custom-header-propagation' => null,
                    'debug-javascript'             => null,
                    'no-debug-javascript'          => null,
                    'default-header'               => null,
                    'encoding'                     => null,
                    'disable-external-links'       => null,
                    'enable-external-links'        => null,
                    'disable-forms'                => null,
                    'enable-forms'                 => null,
                    'images'                       => true,
                    'no-images'                    => null,
                    'disable-internal-links'       => null,
                    'enable-internal-links'        => null,
                    'disable-javascript'           => null,
                    'enable-javascript'            => null,
                    'javascript-delay'             => null,
                    'load-error-handling'          => null,
                    'disable-local-file-access'    => null,
                    'enable-local-file-access'     => null,
                    'minimum-font-size'            => null,
                    'exclude-from-outline'         => null,
                    'include-in-outline'           => null,
                    'page-offset'                  => null,
                    'password'                     => null,
                    'disable-plugins'              => null,
                    'enable-plugins'               => null,
                    'post'                         => null,
                    'post-file'                    => null,
                    'print-media-type'             => null,
                    'no-print-media-type'          => null,
                    'proxy'                        => null,
                    'radiobutton-checked-svg'      => null,
                    'radiobutton-svg'              => null,
                    'run-script'                   => null,
                    'disable-smart-shrinking'      => true,
                    'enable-smart-shrinking'       => null,
                    'stop-slow-scripts'            => null,
                    'no-stop-slow-scripts'         => null,
                    'disable-toc-back-links'       => null,
                    'enable-toc-back-links'        => null,
                    'user-style-sheet'             => null,
                    'username'                     => null,
                    'window-status'                => null,
                    'zoom'                         => 1.04,
                    'footer-center'                => null,
                    'footer-font-name'             => null,
                    'footer-font-size'             => null,
                    'footer-html'                  => "<h1>aqui</h1>",
                    'footer-left'                  => null,
                    'footer-line'                  => null,
                    'no-footer-line'               => null ,
                    'footer-right'                 => null,
                    'footer-spacing'               => null,
                    'header-center'                => null,
                    'header-font-name'             => null,
                    'header-font-size'             => null,
                    'header-html'                  => null,
                    'header-left'                  => null,
                    'header-line'                  => null,
                    'no-header-line'               => null,
                    'header-right'                 => null,
                    'header-spacing'               => null,
                    'replace'                      => null,
                    'disable-dotted-lines'         => null,
                    'cover'                        => null,
                    'toc'                          => null,
                    'toc-depth'                    => null,
                    'toc-font-name'                => null,
                    'toc-l1-font-size'             => null,
                    'toc-header-text'              => null,
                    'toc-header-font-name'         => null,
                    'toc-header-font-size'         => null,
                    'toc-level-indentation'        => null,
                    'disable-toc-links'            => null,
                    'toc-text-size-shrink'         => null,
                    'xsl-style-sheet'              => null,
                    'redirect-delay'               => null, // old v0.9
                    ));
               
                
                
        return new \Symfony\Component\HttpFoundation\Response(
                $pdf, 200, array(
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="file.pdf"',
                     
                ));
              
    }

}
