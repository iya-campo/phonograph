@extends('layouts.app')

@section('content')

<div class="content">
    <div class="row current-song">
        <div class="col-md-12">
            <h4>Now Playing</h4>
            <h2>Blazed</h2>
        </div>
    </div>
    <div class="d-flex justify-content-between m-0">
        <div class="song-details">
            <div class="row">
                <div class="col-md-6">
                    <img class="w-100 m-2" src="/img/sweetener_artwork.jpg" alt="">
                </div>
                <div class="col-md-6 p-2">
                    <span class="d-block">
                        <label for="">Song:</label>
                        <p class="d-inline">Blazed</p>
                    </span>
                    <span class="d-block">
                        <label for="">Artist:</label>
                        <p class="d-inline">Ariana Grande</p>
                    </span>
                    <span class="d-block">
                        <label for="">Album:</label>
                        <p class="d-inline">Sweetener</p>
                    </span>
                    <span class="d-block">
                        <label for="">Duration:</label>
                        <p class="d-inline">03:17</p>
                    </span>
                </div>
            </div>
        </div>
        <div class="songs-list">
            <div class="col-md-12">
                <div class="song-item">
                    <h4>Raindrops (An Angel Cried)</h4>
                </div>
                <div class="song-item">
                    <h4>Borderline</h4>
                </div>
                <div class="song-item">
                    <h4>Successful</h4>
                </div>
                <div class="song-item">
                    <h4>Everytime</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
