@extends('layouts.app')

@section('content')
<div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Add Room Type</h3>
                                </div>
                                <div class="panel-body">
                                        <div class="col-md-6">
                                <form role="form" action="{{{ Request::fullUrl() }}}" method="POST">

                                <div class="form-group">
                                    <label for="Name">Roomtype</label>
                                        <select name="roomtype" class="form-control">
										<option value="double">Double Room</option>
										<option value="quadruple">Quadruple Room</option>
										<option value="studio">Studio</option>
										<option value="connect">Connecting Rooms</option>
										<option value="suite">Suite </option>
										<option value="cabana">Cabana</option>
									</select>
                                </div>
                                <label for="detail">Detail Room</label>
                                <p>WiFi</p>
                                    <label class="fancy-radio">
                                        <input name="wifi" value="yes" type="radio" @if( $hotel->wifi == "yes" ) checked @endif>
                                        <span><i></i>yes</span>
                                    </label>
                                    <label class="fancy-radio">
                                        <input name="wifi" value="no" type="radio" @if( $hotel->wifi == "no" ) checked @endif>
                                        <span><i></i>no</span>
                                    </label>
                                <p>Parking</p>
									<label class="fancy-radio">
                                        <input name="parking" value="yes" type="radio" @if( $hotel->parking == "yes" ) checked @endif>
                                        <span><i></i>yes</span>
                                    </label>
                                    <label class="fancy-radio">
                                        <input name="parking" value="no" type="radio" @if( $hotel->parking == "no" ) checked @endif>
                                        <span><i></i>no</span>
                                    </label>
                                <p>Air conditioner</p>
                                <label class="fancy-radio">
                                        <input name="air" value="yes" type="radio" @if( $hotel->air == "yes" ) checked @endif>
                                        <span><i></i>yes</span>
                                    </label>
                                    <label class="fancy-radio">
                                        <input name="air" value="no" type="radio" @if( $hotel->wifi == "no" ) checked @endif>
                                        <span><i></i>no</span>
                                    </label>
                                <div class="form-group">
                                    <label for="rates">Room rates</label>
                                        <input type="text" name="rates" class="form-control" placeholder="room rates">
                                </div>
                                <div class="form-group">
                                    <label for="Address">Description</label>
                                        <textarea class="form-control" name="descrip" placeholder="" rows="4"></textarea>
                                </div>
                                <br>
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                                    <button class="btn btn-primary" type="submit">Submit </button>
                                </form>
                                <div class="row"></div>
                            </div>
                        </div>
                    </div>


@endsection