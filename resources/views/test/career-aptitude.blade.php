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
            color: #65c1fc !important;
            /* Text color for active page link */
            background-color: transparent !important;
            /* Remove background color */
            border-color: transparent !important;
            /* Remove border color */
        }

        .rating-button {
            margin-right: 10px;
            /* Add space between each button */
            padding: 10px 20px;
            /* Adjust padding */
            font-size: 18px;
            /* Adjust font size */
        }

        .rating-button.active {
            border-color: #65c1fc;
            /* Change border color to blue */
            background-color: transparent;
            /* Change background color to blue */
            color: #65c1fc;
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

    <div class="container border-end border-start border-black p-5">
        <table class="table table-borderless">
            @foreach ($questions as $question)
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
                                data-rating="1">1</button>
                        </td>
                        <td width="10%" style="text-align: center;">
                            <button type="button"
                                class="btn btn-outline-secondary rounded-circle rating-button {{ $question->rat == 2 ? 'active' : '' }}"
                                data-rating="2">2</button>
                        </td>
                        <td width="10%" style="text-align: center;">
                            <button type="button"
                                class="btn btn-outline-secondary rounded-circle rating-button {{ $question->rat == 3 ? 'active' : '' }}"
                                data-rating="3">3</button>
                        </td>
                        <td width="10%" style="text-align: center;">
                            <button type="button"
                                class="btn btn-outline-secondary rounded-circle rating-button {{ $question->rat == 4 ? 'active' : '' }}"
                                data-rating="4">4</button>
                        </td>
                        <td width="10%" style="text-align: center;">
                            <button type="button"
                                class="btn btn-outline-secondary rounded-circle rating-button {{ $question->rat == 5 ? 'active' : '' }}"
                                data-rating="5">5</button>
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

        <div class="d-flex justify-content-center">
            {{ $questions->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>

    @include('components.footer')

    <input type="hidden" id="totalWeight" name="totalWeight">

    <!-- JavaScript for rating buttons -->
    <script>
        // Add click event handler to rating buttons
        $(document).ready(function() {
            $('.rating-button').click(function() {
                $('.rating-button').removeClass(
                    'btn-primary active'); // Remove active class from all buttons
                $(this).addClass('btn-primary active'); // Add active class to clicked button
            });

        });

    </script>
</body>

</html>
