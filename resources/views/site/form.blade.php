@extends('site.layouts.layout')
@section('title','Form')

@section('content')
    <div role="main" class="main">


        <div class="container py-5-5 my-5-5">
            <div class="row justify-content-center">
                <div class="overflow-hidden mb-1">
                    <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">Recipient</strong>
                        Profile</h2>
                </div>
                <div class="overflow-hidden mb-4 pb-3">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>


                <form class="multistep-form needs-validation" action="{{route('save')}}" method="post" enctype="multipart/form-data">
@csrf
                    <ul class="progressbar" style="justify-content: center;
						display: flex;">
                        <li class="active">Personal Info</li>

                        <li>Recipient Info</li>
                        <li>Transfer Info</li>

                    </ul>
                    @include('admin.layouts.status')


                    @include('site.sender')

                    @include('site.receiver')



                    <fieldset>
                        <h2 class="fs-title">Transfer Information</h2>
                        <h3 class="fs-subtitle">This is step 3 of 3</h3>
                        <input type="text" name="amount" placeholder="Amount"/>
                        <input type="text" name="description" placeholder="Transfer description"/>
                        <input type="text" name="type" placeholder="Transfer type"/>
                        <textarea name="notes" placeholder="Notes"></textarea>


                        <input type="button" name="previous" class="previous action-button"
                               value="Recipient Info - Step 2"/>

                        <button type="submit" name="next" class="next action-button" value="submit">Save</button>

                    </fieldset>


                </form>
            </div>

@endsection
