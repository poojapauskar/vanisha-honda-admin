<?php


        $url_data = 'http://127.0.0.1:8000/search_enquiry/?access_token=YbZtBg6XuWWbZ39R3BIn9Mb1XOn7uy&page=1';
        $options_data = array(
          'http' => array(
            'header'  => array(
                          'TEXT: 1111'
                          ),
            'method'  => 'GET',
          ),
        );
        $context_data = stream_context_create($options_data);
        $output_data = file_get_contents($url_data, false,$context_data);
        /*var_dump($output_data);*/
        $enquiry_info = json_decode($output_data,true);
        var_dump($enquiry_info);
?>