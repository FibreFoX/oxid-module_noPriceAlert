<?php
/**
Copyright (c) 2013 Danny Althoff

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.    
*/
/*
    Author: Danny Althoff
    Website: http://www.dynamicfiles.de
    Contact: info@dynamicfiles.de
*/
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'noPriceAlert',
    'title'        => 'Anti-Preisalarm',
    'description'  => 'Deaktiviert das Preisalarm-Feature im Frontend (OXID 4.7.x).',
    'version'      => '1.1',
    'author'       => 'Danny Althoff',
    'url'          => 'http://www.dynamicfiles.de.de',
    'email'        => 'info@dynamicfiles.de',
    'extend'       => array(
        'details'					=> 'dynamicfiles/noPriceAlert/controllers/noPriceAlert_details',
    ),
);