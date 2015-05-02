<?php

function getGenderDivide( $users )
{
    $genders = array(
            'Male' => 0,
            'Female' => 0,
    );
    foreach ($users as $user) {
            $genders[ $user['gender'] ]++;
    }
    return $genders;
}

function getManagerPercentage( $manager_id ) {

    $connection = new JobData();

    $manager_data = $connection->getManagers( $manager_id );

    $manager_ratings = $connection->getManagerRatings( $manager_data[0]['rateman_id'] );

    $columns_to_add = array('communication', 'effective', 'feedback', 'contribution', 'bias');

    return getPercentage ( $manager_ratings, $columns_to_add );

}

function getCompanyPercentage( $company_id )
{
    $connection = new JobData();

    $company_data = $connection->getData( $company_id, 'Culture', 'company_id' );

    $columns_to_add = array( 'satisfaction', 'prof_development', 'appr_pay', 'treatment', 'worklife', 'culture' );

    return getPercentage ( $company_data, $columns_to_add );

    return $company_data;

}

function getPercentage( $data = array(), $columns_to_add = array() )
{

    $total = 0;

    foreach ($columns_to_add as $column) {
        $total = $total + $data[0][ $column ];
    }


    $column_count = count( $columns_to_add ) * 7;
    $percentage = ( $total / $column_max ) * 100;
    $percentage = number_format( $percentage, 2 );

    return $percentage;
}
