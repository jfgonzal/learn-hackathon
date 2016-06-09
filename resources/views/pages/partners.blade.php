@extends('layout')
@section('content')
<?php $i = 0; ?>
    <div class="jumbotron">

        <h1>Welcome to our partners section</h1>
        <p>Please make use of our filter to browse through our partners</p>
        @if(userLoggedIn() == false)
            <p>if you would a more tailored solution, please sign up <a href="auth/register" class="btn btn-primary">here</a> and we will assist you as soon as we are able</p>
        @endif
    </div>

    @foreach($companyDataArr as $companyData)
        <?php if ($i == 0 || $i % 3 == 0) {
        ?><div class="row"><?php
            }
            ?>

            <div id="item-<?php echo $i; ?>" class="col-md-4 items">
                <h2><?php echo 'Name: ' . $companyData['company']->name ?></h2>
                <ul>
                    <li><?php echo 'email: ' . $companyData['company_contact_information']['email'] ?></li>
                </ul>
            </div>

            <?php
            $count = $i + 1;
            if (($count != 0 && $count % 3 == 0) || !isset($products[$i + 1])) {
            ?></div><?php
        }
        ?>
    @endforeach
@stop