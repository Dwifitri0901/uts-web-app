@extends('tema.master')

@section("content")

 <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>COFFE SHOP DWI&MUSDA</h1>
      <h2>Tak Singgah Maka Tak Sayang</h2>

      <form action="forms/notify.php" method="post" role="form" class="php-email-form">
        <div class="row no-gutters">
          <div class="col-md-6 form-group pr-md-1">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group pl-md-1">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
        </div>

        <div class="mb-1">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your notification request was sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Notify me!</button></div>
      </form>
    </div>
  </section><!-- #hero -->

  <main id="main">

  @endsection