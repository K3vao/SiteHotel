<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => 'teste@teste.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'NOME COMPLETO',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'NOME COMPLETO\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'EMAIL',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'EMAIL\' is required.'
    )
    ),
    'phone' => array(
    'order' => 3,
    'type' => 'tel',
    'label' => 'CELULAR&#x2F;TELEFONE',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'CELULAR&#x2F;TELEFONE\' is required.'
    )
    ),
    'address' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'ENDEREÇO',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'ENDEREÇO\' is required.'
    )
    ),
    'address-1' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Endereço',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Endereço\' is required.'
    )
    ),
    'address-2' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'Endereço',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Endereço\' is required.'
    )
    ),
    'address-3' => array(
    'order' => 7,
    'type' => 'string',
    'label' => 'Endereço',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Endereço\' is required.'
    )
    ),
    'address-4' => array(
    'order' => 8,
    'type' => 'string',
    'label' => 'Endereço',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Endereço\' is required.'
    )
    ),
    'address-5' => array(
    'order' => 9,
    'type' => 'string',
    'label' => 'Endereço',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Endereço\' is required.'
    )
    ),
    'date' => array(
    'order' => 10,
    'type' => 'string',
    'label' => 'DATA DE CHEGADA',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'DATA DE CHEGADA\' is required.'
    )
    ),
    'date-1' => array(
    'order' => 11,
    'type' => 'string',
    'label' => 'DATA DE SAIDA',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'DATA DE SAIDA\' is required.'
    )
    ),
    'select' => array(
    'order' => 12,
    'type' => 'string',
    'label' => 'select',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'select\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>