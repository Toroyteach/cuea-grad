<div class="container">
    <div class="newsletter">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Submit Admission Number</h1>
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
                            <input id="newsletter_email" class="newsletter_email" wire:model="admission" type="number" placeholder="12345..." required="required">
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
            </div>
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
                                <th>Specialization:</th>
                                <td>{{ $graduate->specialization }}</td>
                            </tr>
                            <tr>
                                <th>Degree Class:</th>
                                <td>{{ $graduate->degree_class }}</td>
                            </tr>
                            <tr>
                                <th>Mean Score:</th>
                                <td>{{ $graduate->mean_score }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        @endif

    </div>

</div>