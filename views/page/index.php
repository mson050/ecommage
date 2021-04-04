<?php getHeader(); ?>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Hello <?= Session::get('user')['fullname'] ?>, you are the <?= Session::get('user')['id'] ?>-st users in this system, 
your job is <?= Session::get('user')['job'] ?>, you will be logout after <p id='countdown'></p> </h1>
        </div>
        <div class="col-md-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum neque repudiandae molestiae numquam eum eos tenetur minima dolor ducimus repellat, perferendis at mollitia iure, veritatis maiores vitae nostrum laboriosam! Eum.
        </div>
    </div>
</div>

<?php getFooter(); ?>
