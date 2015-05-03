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

function getOverallPercentage( $data = array(), $columns_to_add = array() )
{

    $total = 0;

    foreach ($columns_to_add as $column) {
        $total += $data[0][ $column ];
    }

    $column_count = count( $columns_to_add ) * 7;
    $percentage = ( $total / $column_count ) * 100;
    $percentage = number_format( $percentage, 2 );

    return $percentage;
}

function getManagerPercentage( $manager_id ) {

    $connection = new JobData();

    $manager_data = $connection->getManagers( $manager_id );

    $manager_ratings = $connection->getManagerRatings( $manager_data[0]['rateman_id'] );

    $columns_to_add = array('communication', 'effective', 'feedback', 'contribution', 'bias');

    return getOverallPercentage ( $manager_ratings, $columns_to_add );

}

function getCompanyPercentage( $company_id )
{
    $connection = new JobData();

    $company_data = $connection->getData( $company_id, 'Culture', 'company_id' );

    $columns_to_add = array( 'satisfaction', 'prof_development', 'appr_pay', 'treatment', 'worklife', 'culture' );

    return getOverallPercentage ( $company_data, $columns_to_add );

}

function getCulturePercentages( $company_id )
{
    $connection = new JobData();

    $company_datas = $connection->getData( $company_id, 'Culture', 'company_id' );

    $columns_to_add = array(
        'satisfaction'     => "Satisfaction",
        'prof_development' => "Professional Development",
        'appr_pay'         => "Appropriate Pay",
        'treatment'        => "Treatment",
        'worklife'         => "Work/Life",
        'culture'          => "Culture"
    );

    $percentage_sets = array();

    foreach ( $company_datas as $company_data ) {
        $percentages = array();
        foreach ($columns_to_add as $key => $name) {
            if ( $key === 'appr_pay' || $key === 'treatment' ) {
                $percentages[ $name ] = $company_data[ $key ] ? 100 : 0;
            } else {
                $percentages[ $name ] = ($company_data[ $key ] / 7) * 100;
            }
        }
        $percentage_sets[] = $percentages;
    }

    $overall_percentage = array();

    foreach ($percentage_sets as $set) {
        foreach ($set as $name => $percentage) {
            $overall_percentage[ $name ] += $percentage;
        }
    }

    foreach ($overall_percentage as $name => $percentage) {
        $overall_percentage[ $name ] = $percentage / count( $percentage_sets );
    }

    return $overall_percentage;
}



function getManagerPercentages( $manager_id )
{
    $connection = new JobData();

    $managers_data = $connection->getData( $manager_id, 'Rate_Manager', 'manager_id' );

    $columns_to_add = array(
        'communication' => "Communication",
        'effective'     => "Effective",
        'feedback'      => "Feedback",
        'contribution'  => "Contribution",
        'bias'          => "Bias",
    );


    $percentage_sets = array();

    foreach ( $managers_data as $manager_data ) {
        $percentages = array();
        foreach ($columns_to_add as $key => $name) {
            if ( $key === 'bias' ) {
                $percentages[ 'Bias' ] = $manager_data['bias'] ? 100 : 0;
            } else {
                $percentages[ $name ] = ($manager_data[ $key ] / 7) * 100;
            }
        }
        $percentage_sets[] = $percentages;
    }

    $overall_percentage = array();

    foreach ($percentage_sets as $set) {
        foreach ($set as $name => $percentage) {
            $overall_percentage[ $name ] += $percentage;
        }
    }

    foreach ($overall_percentage as $name => $percentage) {
        $overall_percentage[ $name ] = $percentage / count( $percentage_sets );
    }

    return $overall_percentage;
}
