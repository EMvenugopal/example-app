<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        .card:hover {
            cursor: pointer;
        }
        .modal-content {
            max-height: 90vh;
            overflow-y: auto;
        }
        .modal-backdrop.show {
            opacity: 0.5;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Dashboard</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card" data-toggle="modal" data-target="#modal1">
                    <div class="card-body">
                        <h5 class="card-title">Card 1</h5>
                        <p class="card-text">This is some content inside the first card. Overflow content should be hidden.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" data-toggle="modal" data-target="#modal2">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">This is some content inside the second card. Overflow content should be hidden.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card" data-toggle="modal" data-target="#modal3">
                    <div class="card-body">
                        <h5 class="card-title">Card 3</h5>
                        <p class="card-text">This is some content inside the third card. Overflow content should be hidden.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" data-toggle="modal" data-target="#modal4">
                    <div class="card-body">
                        <h5 class="card-title">Card 4</h5>
                        <p class="card-text">This is some content inside the fourth card. Overflow content should be hidden.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal1Label">Card 1 Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>This is the full content of the first card. All the previously hidden content is now visible.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal2Label">Card 2 Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>This is the full content of the second card. All the previously hidden content is now visible.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal3Label">Card 3 Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>This is the full content of the third card. All the previously hidden content is now visible.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="modal4Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal4Label">Card 4 Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>This is the full content of the fourth card. All the previously hidden content is now visible.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
