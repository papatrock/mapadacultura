<?php
/**
 * See https://github.com/Respect/Validation to know how to write validations
 */
return array(
    'metadata' => array(
        'URL' => array(
          'label' => 'URL',
          'type' => 'text',
          'validations'=> array(
              'v::url()' => 'A URL informada é inválida.'
          )
        ),

        'entidades_habilitadas' => array(
            'label' => 'Entidades Habilitadas',
            'type' => 'multiselect',
            'allowOther' => true,
            'allowOtherText' => 'Outros',
            'options' => array(
                'Agentes',
                'Espaços',
                'Projetos',
                'Eventos'
            )
        ),
        'cor_agentes' => array(
            'label' => 'Cor: Agente',
            'type' => 'text'
        ),
        'cor_espacos' => array(
            'label' => 'Cor: Espaços',
            'type' => 'text'
        ),
        'cor_projetos' => array(
            'label' => 'Cor: Projetos',
            'type' => 'text'
        ),
        'cor_eventos' => array(
            'label' => 'Cor: Eventos',
            'type' => 'text'
        ),
        'filtro1' => array(
            'label' => 'Filtro 1',
            'type' => 'text'
        )

    )
    /* EXEMPLOS DE METADADOS:

    'cnpj' => array(
        'label' => 'CNPJ',
        'type' => 'text',
        'validations' => array(
            'unique' => 'Este CNPJ já está cadastrado em nosso sistema.',
            'v::cnpj()' => 'O CNPJ é inválido.'
        )
    ),
    'cpf' => array(
        'label' => 'CPF',
        'type' => 'text',
        'validations' => array(
            'required' => 'Por favor, informe o CPF.',
            'v::cpf()' => 'O CPF é inválido.'
        )
    ),
    'radio' => array(
        'label' => 'Um exemplo de input radio',
        'type' => 'radio',
        'options' => array(
            'valor1' => 'Label do valor 1',
            'valor2' => 'Label do valor 2',
        ),
        'default_value' => 'valor1'
    ),
    'checkboxes' => array(
        'label' => 'Um exemplo de grupo de checkboxes',
        'type' => 'checkboxes',
        'options' => array(
            'valor1' => 'Label do Primeiro checkbox',
            'valor2' => 'Label do Primeiro checkbox'
        ),
        'default_value' => array(),
        'validations' => array(
            'v::arrayType()->notEmpty()' => 'Você deve marcar ao menos uma opção.'
        )
    ),
    'checkbox' => array(
        'label' => 'Um exemplo de campo booleano com checkbox.',
        'type' => 'checkbox',
        'input_value' => 1,
        'default_value' => 0
    ),
    'site' => array(
        'label' => 'Site',
        'type' => 'text',
        'validations'=> array(
            'v::url()' => 'A URL informada é inválida.'
        )
    )
     */
);
