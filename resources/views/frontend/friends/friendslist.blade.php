@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
<div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-list"></i> My Friends Lists
                </div>
                <div class="card-body">
                    <ul style="display:flex;justify-content:space-evenly;">
                        <table>
                            <tr>
                                <td align="center">Tom</td>
                            </tr>
                            <tr>
                                <td><span style="font-size:10em;"><i class="fas fa-user-astronaut"></i></span></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td align="center">Regis</td>
                            </tr>
                            <tr>
                                <td><span style="font-size:10em;"><i class="fas fa-user-graduate"></i></span></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td align="center">Edouard</td>
                            </tr>
                            <tr>
                                <td><span style="font-size:10em;"><i class="fas fa-user-secret"></i></span></td>
                            </tr>
                        </table>
                    </ul>
                     <ul style="display:flex;justify-content:space-evenly;">
                        <table>
                            <tr>
                                <td align="center">Jacques</td>
                            </tr>
                            <tr>
                                <td><span style="font-size:10em;"><i class="fas fa-user-ninja"></i></span></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td align="center">Hugues</td>
                            </tr>
                            <tr>
                                <td><span style="font-size:10em;"><i class="fas fa-user-tie"></i></span></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td align="center">Richard</td>
                            </tr>
                            <tr>
                                <td><span style="font-size:10em;"><i class="fas fa-user-md"></i></span></td>
                            </tr>
                        </table>
                    </ul>
                    <div>
                        <a href="{{route('frontend.addFriends')}}"><i class="fas fa-plus-circle"></i> Add friends</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection