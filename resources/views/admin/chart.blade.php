@extends('layouts.app')

@section('content')
    <div class="container">
        <canvas id="chart"></canvas>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/chart.js') }}"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                url: "{{ route('admin.chart.data') }}",
                method: "GET",
                dataType: "json",
                success: function (data) {
                    var labels = [];
                    var values = [];

                    data.forEach(function (category) {
                        labels.push(category.name);
                        values.push(category.price);
                    });

                    var ctx = document.getElementById('chart').getContext('2d');
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Total Sales by Category',
                                data: values,
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    </script>
@endpush