@extends('layouts.master_user')

@section('content')
    <div class="custom-modal mx-auto mt-4 mb-3" style="width: 70%;">
        <div class="custom-modal-body p-5 py-4 rounded" style="background-color: rgba(231, 210, 173, 1);">
            <div class="choose-symptom-title fw-bold fs-4 text-center mb-2">
                Pilih Gejala
            </div>

            <div class="choose-symptom-list mb-3">
                <div id="choose-symptom-form">
                    @foreach ($symptoms as $symptom)
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="symptom_id_{{ $symptom->id }}"
                                value="{{ $symptom->id }}" id="checkbox_{{ $symptom->id }}" @if($checkedCheckboxes && in_array($symptom->id, $checkedCheckboxes)) checked @endif>
                            <label class="form-check-label" for="checkbox_{{ $symptom->id }}">
                                G{{ sprintf('%02d', $symptom->id) }} - {{ $symptom->body }} @if(isset($symptom->possible_diseases)) <b>-> {{$symptom->possible_diseases}}</b> @endif
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <a id="submit-button" class="btn btn-primary">
                    Submit
                </a>
            </div>
        </div>
    </div>

    <img class="w-100 position-absolute start-0 top-0" style="height: 110%" src="{{ asset('img/choose_symptom.png') }}"
        alt="Background Image">
    <div class="w-100 position-absolute start-0 top-0 h-100" style="background-color: rgba(0,0,0,.2); z-index:-1" />

    <form action="{{route("user.choose_symptom")}}" id="choose-symptom-hidden-form" class="d-none">
        {{-- Value will be set by javascript below --}}
        <input type="text" name="checked_checkboxes" id="checked-checkbox-input">
    </form>

    <script defer>
        let form = [...document.getElementsByClassName("form-check-input")];
        let labels = [...document.getElementsByClassName("form-check-label")];

        let totalSymptoms = [];
        labels.forEach(label => {
            if(!label.textContent.trim().split("->")[1]) {
                return;
            }

            let symptoms = label.textContent.trim().split("->")[1].split("|");
            symptoms.forEach(symptom => {
                if(!totalSymptoms.includes(symptom.trim())) {
                    totalSymptoms.push(symptom.trim());
                }
            });
        })

        const submitButton = document.querySelector("#submit-button");
        submitButton.addEventListener("click", (event) => {
            window.location.href=`{{route("user.result")}}?symptoms=${JSON.stringify(totalSymptoms)}`;
        });

        form.forEach(input => {
            input.addEventListener('change', (event) => {
                let checkedCheckbox = [];

                form.forEach(eachInput => {
                    if (eachInput.checked) {
                        checkedCheckbox.push(parseInt(eachInput.value));
                    }
                });

                // checked checkbox id's buffered inside checkedCheckbox's array.
                submitForm(checkedCheckbox);
            })
        });

        const submitForm = (checkedCheckbox) => {
            const checkedCheckboxInput = document.querySelector("#checked-checkbox-input");

            checkedCheckboxInput.value = JSON.stringify(checkedCheckbox);

            const chooseSymptomForm = document.querySelector("#choose-symptom-hidden-form");
            chooseSymptomForm.submit();
        }
    </script>
@endsection
