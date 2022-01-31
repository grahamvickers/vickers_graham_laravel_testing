@extends('layouts.master')

@section('content')
    <div class="row mb-5">
        <div class="col-md">
            <div class="item clown">
                <h2 class="title">Clowns</h2>
                <div class="description">
                    <p>View all clowns at our delightful carnival!</p>
                    <a href="{{ route('clowns.index') }}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="item rollercoaster">
                <h2 class="title">Rollercoasters</h2>
                <div class="description">
                    <p>View all clowns at our delightful carnival!</p>
                    <a href="{{ route('rollercoasters.index') }}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="item carousel">
                <h2 class="title">Carousels</h2>
                <div class="description">
                    <p>View all clowns at our delightful carnival!</p>
                    <a href="{{ route('carousels.index') }}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col">
            @include('layouts.partials.arcade-alert')
        </div>
    </div>

    <div class="row mb-5">
        <div class="col">
            <h2 class="text-primary text-uppercase">ice cream lollipop tiramisu</h2>
            <p>
                Apple pie croissant I love ice cream lollipop tiramisu. Powder jujubes marshmallow chocolate cake I love sweet sugar plum. Candy powder cake. Donut cupcake chupa chups sugar plum marshmallow. Ice cream halvah tart cupcake pie sweet roll candy canes oat cake I love. Halvah chocolate bar dragée I love. Pudding gingerbread bonbon chocolate pudding sesame snaps cake cupcake. Tiramisu icing candy ice cream sweet I love apple pie cheesecake. Ice cream I love tart sweet roll powder tiramisu. Cotton candy chocolate cake icing muffin chupa chups pastry lollipop. Tart pastry cookie I love danish. Donut lemon drops candy pie. Chocolate cotton candy fruitcake apple pie toffee brownie.
            </p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col">
            <h2 class="text-primary text-uppercase">Lemon drops pudding</h2>
            <p>
                Oat cake cake I love bonbon I love. Lemon drops pudding pudding. Cupcake danish jelly-o. I love topping macaroon tiramisu apple pie I love pie marshmallow dragée. I love cheesecake bonbon gingerbread halvah dessert I love icing. Jelly beans I love tootsie roll jujubes pudding gummi bears jelly-o. Powder I love cookie cheesecake soufflé caramels. Icing chocolate I love brownie chupa chups dragée. Chocolate croissant brownie. Chocolate cake sugar plum jujubes I love. I love cookie oat cake sweet roll I love lemon drops. Candy marzipan chocolate bar jelly beans oat cake candy canes. Cake fruitcake biscuit liquorice cheesecake cake brownie wafer candy.
            </p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col">
            <h2 class="text-primary text-uppercase">bonbon liquorice gingerbread</h2>
            <p>
                I love bonbon liquorice gingerbread lollipop pudding. Cake jelly-o cotton candy tiramisu I love candy liquorice. Macaroon macaroon chupa chups pudding chocolate cake apple pie I love dessert. Dragée donut I love cotton candy pastry. I love brownie gummi bears lemon drops tart wafer halvah. Candy biscuit danish. Donut apple pie croissant cake lemon drops toffee apple pie tiramisu jelly beans. Cupcake croissant gummies I love I love chocolate bar I love. Sweet roll sesame snaps danish sweet soufflé jujubes chocolate bar jelly-o. Jelly gummi bears lemon drops. Lollipop I love toffee jelly beans tootsie roll. I love croissant tiramisu marshmallow liquorice chocolate macaroon. Cake tootsie roll tiramisu.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @include('layouts.partials.arcade-alert')
        </div>
    </div>
@endsection