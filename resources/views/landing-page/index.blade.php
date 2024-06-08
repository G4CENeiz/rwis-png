@extends('layouts.landing')


@section('css')
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
<style>
    .gradient-box {
        width: 80%; /* Mengatur lebar kotak */
        height: auto; /* Mengatur tinggi kotak, bisa disesuaikan */
        padding: 4%;
        background: linear-gradient(to bottom, #ffffff, #52b952);
        color: #024100;
        margin: 20px auto; /* Mengatur margin agar kotak berada di tengah */
        border-radius: 8px; /* Menambahkan sudut yang melengkung */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
    }
</style>
@endsection

@section('breadcrumb')
<div class="row page-title align-items-center">
    <nav aria-label="breadcrumb" class="float-right mt-1">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Shreyu</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Starter</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<!-- Kotak dengan background linear gradient -->
<div class="gradient-box">
    <h1>SiSatu ANJAY</h1>
    <h2>Welcome to Our Landing Page</h2>
    <p>This is a sample box with a linear gradient background. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus asperiores voluptatibus minima autem inventore beatae doloribus aperiam, vitae similique suscipit consequatur voluptate maiores laudantium architecto, dolorum vero! Numquam delectus odit eius quia rem perferendis omnis. Doloribus obcaecati harum, amet magnam iusto necessitatibus repellendus nisi corrupti incidunt voluptatum expedita itaque facilis nobis officia modi ea voluptatibus. Quasi expedita natus dolorem velit nobis optio doloribus deleniti magnam, vero omnis laborum molestiae incidunt facere aspernatur recusandae. Adipisci iste qui ut animi nesciunt veritatis nemo eveniet accusamus? Consequatur, aperiam autem ratione, officiis sapiente rerum sint illo est optio perferendis voluptatibus laudantium excepturi beatae unde modi labore temporibus eos provident dolores fugit? Placeat non, itaque illo illum iusto tempora, ducimus temporibus numquam, culpa nam ex. Voluptatum odio praesentium eaque dolores maxime nisi? Necessitatibus, consectetur et quidem voluptatum eos id! Nobis aperiam optio expedita possimus alias. At obcaecati quaerat earum quidem explicabo maiores impedit ipsam libero aperiam, commodi sunt necessitatibus, neque sed, cumque perferendis totam laborum provident soluta ratione ipsum eligendi molestias tempore? Esse, porro. Recusandae, minima, odit facere quia sequi voluptatum labore enim obcaecati deleniti nesciunt esse inventore quod quidem quibusdam. Itaque debitis similique quam optio, delectus rerum quas illum blanditiis id ducimus libero magnam.</p>
</div>
@endsection

@section('script')
<!-- optional plugins -->
<script src="{{ URL::asset('assets/libs/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- init js -->
<script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script>
@endsection