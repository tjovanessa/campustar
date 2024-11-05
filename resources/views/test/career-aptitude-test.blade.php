<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Career Aptitude Test</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom CSS -->
    <style>
        /* Override Bootstrap pagination styles */
        .pagination {
            border: 1px solid black;
            /* Border for the outer pagination container */
            padding: 0.5rem;
            /* Optional: Add padding for spacing */
        }

        .pagination .page-item {
            border: none;
            /* Remove borders from individual page items */
        }

        .pagination .page-item:first-child .page-link {
            border-top-left-radius: 0.25rem;
            /* Optional: Add border radius to the first page link */
            border-bottom-left-radius: 0.25rem;
            /* Optional: Add border radius to the first page link */
        }

        .pagination .page-item:last-child .page-link {
            border-top-right-radius: 0.25rem;
            /* Optional: Add border radius to the last page link */
            border-bottom-right-radius: 0.25rem;
            /* Optional: Add border radius to the last page link */
        }

        .pagination .page-link {
            color: gray !important;
            /* Default color for page links */
            background-color: transparent !important;
            /* Remove background color */
            border-color: transparent !important;
            /* Remove border color */
            padding: 0.5rem;
            /* Optional: Add padding for spacing */
            margin: 0 0.25rem;
            /* Optional: Add margin between page links */
        }

        .pagination .page-item.active .page-link {
            color: #008DFF !important;
            /* Text color for active page link */
            background-color: transparent !important;
            /* Remove background color */
            border-color: transparent !important;
            /* Remove border color */
        }

        .rating-button {
            /* Add space between each button */
            padding: 10px 20px;
            /* Adjust padding */
            font-size: 18px;
            /* Adjust font size */
        }

        .rating-button.active {
            border-color: #008DFF;
            /* Change border color to blue */
            background-color: #008DFF;
            /* Change background color to blue */
            color: white;
            /* Change text color to white */
        }

        .rating-button:not(.active) {
            border-color: gray;
            /* Set border color for inactive buttons */
            background-color: transparent;
            /* Remove background color */
            color: gray;
            /* Set text color for inactive buttons */
        }
    </style>
</head>

<body>
    @include('components.navbar2')

    <div class="container p-5">
        <table class="table table-borderless">
            @php
                $categories = ['verbal', 'logis', 'visual', 'kinestetik', 'musikal', 'interpersonal', 'intrapersonal', 'naturalis'];
            @endphp
            @foreach ($questions as $index => $question)
                @php
                    $category = $categories[(int)($index / 10)];
                @endphp
                <thead>
                    <tr>
                        <td colspan="1">{{ $question->number }}.</td>
                        <td colspan="6">{{ $question->question }}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td width="10%" style="text-align: center;">
                            <button type="button"
                                class="btn btn-outline-secondary rounded-circle rating-button {{ $question->rat == 1 ? 'active' : '' }}"
                                data-question-id="{{ $question->id }}" data-category="{{ $category }}" data-rating="1">1</button>
                        </td>
                        <td width="10%" style="text-align: center;">
                            <button type="button"
                                class="btn btn-outline-secondary rounded-circle rating-button {{ $question->rat == 2 ? 'active' : '' }}"
                                data-question-id="{{ $question->id }}" data-category="{{ $category }}" data-rating="2">2</button>
                        </td>
                        <td width="10%" style="text-align: center;">
                            <button type="button"
                                class="btn btn-outline-secondary rounded-circle rating-button {{ $question->rat == 3 ? 'active' : '' }}"
                                data-question-id="{{ $question->id }}" data-category="{{ $category }}" data-rating="3">3</button>
                        </td>
                        <td width="10%" style="text-align: center;">
                            <button type="button"
                                class="btn btn-outline-secondary rounded-circle rating-button {{ $question->rat == 4 ? 'active' : '' }}"
                                data-question-id="{{ $question->id }}" data-category="{{ $category }}" data-rating="4">4</button>
                        </td>
                        <td width="10%" style="text-align: center;">
                            <button type="button"
                                class="btn btn-outline-secondary rounded-circle rating-button {{ $question->rat == 5 ? 'active' : '' }}"
                                data-question-id="{{ $question->id }}" data-category="{{ $category }}" data-rating="5">5</button>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="color: gray; white-space: nowrap; text-align: center;">Tidak Setuju</td>
                        <td colspan="3"></td>
                        <td style="color: gray; white-space: nowrap; text-align: center;">Setuju</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        
        <div class="d-flex justify-content-center mt-5 mb-4">
            <button id="finish-button" class="btn btn-primary" style="color: #FFFFFF; font-weight: 600; border-color: #008DFF;">Selesai</button>
        </div>

    </div>

    @include('components.footer')

    <!-- JavaScript for rating buttons -->
    <script>
        var scores = {};

        var categoryScores = {
            'verbal': 0,
            'logis': 0,
            'visual': 0,
            'kinestetik': 0,
            'musikal': 0,
            'interpersonal': 0,
            'intrapersonal': 0,
            'naturalis': 0,
        };

        var totalQuestions = 80;   
        
        var categoryMap = {
            1: 'verbal', 2: 'verbal', 3: 'verbal', 4: 'verbal', 5: 'verbal', 6: 'verbal', 7: 'verbal', 8: 'verbal', 9: 'verbal', 10: 'verbal',
            11: 'logis', 12: 'logis', 13: 'logis', 14: 'logis', 15: 'logis', 16: 'logis', 17: 'logis', 18: 'logis', 19: 'logis', 20: 'logis',
            21: 'visual', 22: 'visual', 23: 'visual', 24: 'visual', 25: 'visual', 26: 'visual', 27: 'visual', 28: 'visual', 29: 'visual', 30: 'visual',
            31: 'kinestetik', 32: 'kinestetik', 33: 'kinestetik', 34: 'kinestetik', 35: 'kinestetik', 36: 'kinestetik', 37: 'kinestetik', 38: 'kinestetik', 39: 'kinestetik', 40: 'kinestetik',
            41: 'musikal', 42: 'musikal', 44: 'musikal', 44: 'musikal', 45: 'musikal', 46: 'musikal', 47: 'musikal', 48: 'musikal', 49: 'musikal', 50: 'musikal',
            51: 'interpersonal', 52: 'interpersonal', 55: 'interpersonal', 55: 'interpersonal', 55: 'interpersonal', 56: 'interpersonal', 57: 'interpersonal', 58: 'interpersonal', 59: 'interpersonal', 60: 'interpersonal',
            61: 'intrapersonal', 62: 'intrapersonal', 66: 'intrapersonal', 66: 'intrapersonal', 65: 'intrapersonal', 66: 'intrapersonal', 67: 'intrapersonal', 68: 'intrapersonal', 69: 'intrapersonal', 70: 'intrapersonal',
            71: 'naturalis', 72: 'naturalis', 77: 'naturalis', 77: 'naturalis', 75: 'naturalis', 76: 'naturalis', 77: 'naturalis', 78: 'naturalis', 79: 'naturalis', 80: 'naturalis',
        };

        $(document).ready(function() {
            $('.pagination').hide();

            $('.rating-button').click(function() {
                var questionId = $(this).data('question-id');
                var rating = $(this).data('rating'); 
                var category = $(this).data('category');
                var $ratingButtons = $(this).closest('tbody').find('.rating-button');  
                $ratingButtons.removeClass('active'); 
                $(this).addClass('active'); 
                scores[questionId] = rating;
                console.log('Question ID: ' + questionId + ', Rating: ' + rating); 

                // if (Object.keys(scores).length === totalQuestions) {
                //     $('#finish-button').prop('disabled', false); 
                // }
            });

            $('#finish-button').click(function() {
                for (var questionId = 1; questionId <= 80; questionId++) {
                    var rating = scores[questionId];
                    var category = categoryMap[questionId];
                    if (rating && category) {
                        categoryScores[category] += rating;
                    }
                }

                var highestCategory = '';
                var highestScore = -1;

                for (var category in categoryScores) {
                    if (categoryScores[category] > highestScore) {
                        highestScore = categoryScores[category];
                        highestCategory = category;
                    }
                }

                console.log('Total Skor Kategori:');
                console.log(categoryScores);
                console.log('Kategori dengan Skor Tertinggi:');
                console.log(highestCategory + ': ' + highestScore);

                sessionStorage.setItem('highestCategory', highestCategory);

                window.location.href = '/hasiltes';
            });
        });

    </script>
</body>

</html>
