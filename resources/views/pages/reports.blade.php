<x-app-layout>
    <!-- Banner Area -->
    <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2><span class="color_big_heading">Our</span> Reports</h2>
                        <ul class="breadcrumb_wrapper">
                            <li class="breadcrumb_item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb_item"><img src="{{ asset('assets/img/icon/arrow.png') }}" alt="arrow"></li>
                            <li class="breadcrumb_item active">Reports & Downloads</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reports and Downloads Area -->
    <section id="reports_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="section_heading">
                        <h3>Reports & Downloads</h3>
                        <h2>Access our <span class="color_big_heading">latest</span> reports and resources</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Annual Reports Section -->
                <div class="col-lg-12">
                    <h2>General <span class="color_big_heading">Reports</span></h2>
                    <div class="reports_grid">
                        <div class="row">
                            <!-- Example Report Card - Duplicate and modify as needed -->
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="report_card">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Environment Day Report July, 2025</h5>
                                            <div class="report-meta mb-3">
                                                <span class="report-author"><i class="fas fa-user"></i> Betty Mutunda</span>
                                                <span class="report-date"><i class="far fa-calendar-alt"></i> July 5, 2025</span>
                                            </div>
                                            <p class="card-text">World Environment Day Commemoration Report covering our activities and impact.</p>
                                            <a href="{{ asset('assets/reports/Environmental_day_report_2025.pdf') }}" download class="btn btn-primary mt-auto">
                                                <i class="fas fa-download"></i> Download Report
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <!-- Additional Report Card Example -->
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="report_card">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Annual Report 2024</h5>
                                            <div class="report-meta mb-3">
                                                <span class="report-author"><i class="fas fa-user"></i> John Doe</span>
                                                <span class="report-date"><i class="far fa-calendar-alt"></i> January 15, 2025</span>
                                            </div>
                                            <p class="card-text">Comprehensive overview of our organization's activities throughout 2024.</p>
                                            <a href="#" class="btn btn-primary mt-auto">
                                                <i class="fas fa-download"></i> Download PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            --}}

                            
                        </div>
                    </div>
                </div>

                <!-- Resources Section -->
                <div class="col-lg-12 mt-5">
                    <h2>Other <span class="color_big_heading">Resources</span></h2>
                    <div class="reports_grid">
                        <div class="row">
                            <!-- Example Resource Card -->
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="report_card">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Project Guidelines</h5>
                                            <div class="report-meta mb-3">
                                                <span class="report-author"><i class="fas fa-user"></i> Betty Mutunda</span>
                                                <span class="report-date"><i class="far fa-calendar-alt"></i> Jul 30, 2025</span>
                                            </div>
                                            <p class="card-text">Local initiatives as a vehicle for climate change.</p>
                                            <a href="{{ asset('assets/reports/Local_initiative.pdf') }}" download class="btn btn-primary mt-auto">
                                                <i class="fas fa-download"></i> Download PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

@push('css')
<style>
    .report_card .card {
        transition: transform 0.3s ease;
        border: none;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        height: 100%;
    }

    .report_card .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }

    .report_card .card-body {
        padding: 2rem;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .report_card .card-text {
        flex-grow: 1;
        margin-bottom: 1.5rem;
    }

    .report-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        font-size: 0.85rem;
        color: #6c757d;
    }

    .report-author, .report-date {
        display: flex;
        align-items: center;
        gap: 0.3rem;
    }

    .report-meta i {
        font-size: 0.8rem;
    }

    .report_card .btn-primary {
        background-color: var(--primary-color);
        border: none;
        padding: 0.5rem 1rem;
        transition: background-color 0.3s ease;
        align-self: flex-start;
        margin-top: auto;
    }

    .report_card .btn-primary:hover {
        background-color: var(--secondary-color);
    }

    .reports_grid {
        margin-top: 2rem;
    }

    #reports_area h2 {
        margin-bottom: 1.5rem;
    }
</style>
@endpush
