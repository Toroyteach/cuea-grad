<div class="container">
    <div class="newsletter">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Check Details</h1>
                    <p class="text-dark">Submit your admission number below to view your details</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">

                <div>
                    @if (session()->has('info'))
                    <div class="alert alert-info">
                        {{ session('info') }}
                    </div>
                    @endif
                </div>

                <div>
                    @if (session()->has('throttle'))
                    <div class="alert alert-danger">
                        {{ session('throttle') }}
                    </div>
                    @endif
                </div>
                <div class="newsletter_form_container mx-auto">
                    <div>
                        @error('admission')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <form wire:submit.prevent="getResults">
                        <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                            <input id="newsletter_email" class="newsletter_email" wire:model="admission" type="text" placeholder="12345..." required="required">
                            <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Submit</button>
                        </div>
                    </form>

                    <br />

                    <div wire:loading wire:target="getResults()">

                        <div class="d-flex justify-content-center">
                            <span class="loader"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @if ($showResultsDiv)
        <div class="container">
            <div class="text-center">
                <h2>Student Information</h2>

                @if($graduate->status != 'Cleared')
                <div class="alert alert-warning" role="alert">
                    {{ $graduate->status_msg }}
                </div>
                @else

                <div class="alert alert-success" role="alert">
                    {{ $graduate->status_msg }}
                </div>

                @endif
            </div>


            @if($graduate->status === 'Cleared' || $graduate->status === 'cleared' || $graduate->status === 'CLEARED')
            <div class="rcontainer flex row">
                <div class=" col-md-6 col-lg-6 col-sm-12 flex_content table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Student Name:</th>
                                <td>{{ $graduate->name }}</td>
                            </tr>
                            <tr>
                                <th>Admission Number:</th>
                                <td>{{ $graduate->reg_adm_no }}</td>
                            </tr>
                            <tr>
                                <th>Campus/College:</th>
                                <td>{{ $graduate->college_cumpus }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=" col-md-6 col-lg-6 col-sm-12 flex_content">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Faculty:</th>
                                <td>{{ $graduate->school_faculty }}</td>
                            </tr>
                            <tr>
                                <th>Specialization:</th>
                                <td>{{ $graduate->specialization }}</td>
                            </tr>
                            <tr>
                                <th>Programme:</th>
                                <td>{{ $graduate->programme }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="alert alert-warning text-dark text-center" role="alert">
                    This is how your information shall appear on Graduation Magazine and Graduation Certificate.
                    <br />
                    Please visit the Registry if there is any issue with Your Details
                </div>
            </div>
            @endif


        </div>
        @endif

    </div>

</div>