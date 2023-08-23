<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <?php do_action( 'wpseo_head' );  ?>
        <meta name="viewport" content="width=device-width">
       <!-- Include Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Include Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
        <?php wp_head(); ?>
        
    </head>

    <body <?php body_class(); ?>>
        <?php do_action('after_body'); ?>
        <header class="top-sticky">
            <?php include 'navigation.php'; ?>
            </header>

        <section class="header-section">
        <div class="container d-flex align-items-center justify-content-center" style="height: 60vh;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Exotic & Delicious</h1>
                    <p class="pt-3">Bar & Kitchen</p>
                </div>
            </div>
        </div>
        </section>
       