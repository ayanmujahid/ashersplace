<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>


<main>

    <section class="page-hero">
        <div class="page-hero-decor" aria-hidden="true"></div>

        <div class="container page-hero-inner">
            <p class="eyebrow eyebrow-light reveal">Donate</p>

            <h1 class="page-hero-title reveal">
                Help Build Safe, Stable Housing for Those in Need
            </h1>

            <p class="page-hero-lede reveal">
                Your generosity helps Asher's Place Community Homes provide safe housing,
                essential resources, and ongoing support for individuals experiencing
                homelessness across Southern Ontario. Every donation brings someone one
                step closer to a place they can truly call home.
            </p>
        </div>
    </section>

    <section class="donation-campaign">
        <div class="container">

            <div class="section-head text-center">
                <p class="eyebrow reveal">Support Our Mission</p>
                <h2 class="section-title reveal">
                    Help Launch Our 20-Unit Housing Campaign
                </h2>
                <p class="reveal">
                    Every donation helps provide safe, stable housing for individuals
                    experiencing homelessness across Southern Ontario. Your contribution
                    directly supports securing apartment units, furnishing homes,
                    essential move-in supplies, and providing ongoing community support.
                </p>
            </div>

            <div class="campaign-card reveal">

                <div class="campaign-content">

                    <span class="campaign-badge">
                        Active Fundraiser
                    </span>

                    <h3>
                        The 20-Unit Housing Campaign
                    </h3>

                    <p>
                        Asher's Place Community Homes is working to secure
                        <strong>20 dedicated apartment units</strong> across
                        Milton, Brampton, Mississauga, Toronto, and Pickering.
                        Rather than building new facilities, we lease existing homes,
                        allowing individuals to transition directly from shelters into
                        permanent, supported housing much faster.
                    </p>

                    <ul class="campaign-list">
                        <li><i class="fas fa-check-circle"></i> Secure affordable housing units</li>
                        <li><i class="fas fa-check-circle"></i> Furniture & household essentials</li>
                        <li><i class="fas fa-check-circle"></i> Move-in assistance</li>
                        <li><i class="fas fa-check-circle"></i> Daily support & case management</li>
                        <li><i class="fas fa-check-circle"></i> Long-term housing stability</li>
                    </ul>

                </div>

                <div class="campaign-actions">

                    <div class="donation-box">

                        <h4>Choose How You'd Like to Give</h4>

                        <p>
                            Every contribution—large or small—helps change a life.
                            Select your preferred donation method below.
                        </p>

                        <a href="https://www.gofundme.com/"
                            target="_blank"
                            class="btn btn-outline btn-block">
                            <i class="fas fa-hand-holding-heart"></i>
                            Donate via GoFundMe
                        </a>

                        <a href="donate-now.php"
                            class="btn btn-primary btn-block">
                            <i class="fas fa-credit-card"></i>
                            Donate Now
                        </a>

                        <small>
                            Secure donations help fund housing, support services,
                            and emergency assistance for individuals in need.
                        </small>

                    </div>

                </div>

            </div>

        </div>
    </section>

</main>

<style>
    .donation-campaign {
        padding: 100px 0;
        background: #f8fafc;
    }

    .campaign-card {
        display: grid;
        grid-template-columns: 1.5fr .8fr;
        gap: 50px;
        margin-top: 60px;
        background: #fff;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, .08);
    }

    .campaign-content {
        padding: 60px;
    }

    .campaign-content h3 {
        font-size: 2rem;
        margin: 15px 0 20px;
    }

    .campaign-content p {
        color: #666;
        line-height: 1.9;
    }

    .campaign-badge {
        display: inline-block;
        padding: 8px 18px;
        border-radius: 50px;
        background: #0d8f4b;
        color: #fff;
        font-size: .85rem;
        font-weight: 600;
    }

    .campaign-list {
        margin-top: 35px;
        list-style: none;
        padding: 0;
    }

    .campaign-list li {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 18px;
        color: #333;
        font-weight: 500;
    }

    .campaign-list i {
        color: #0d8f4b;
    }

    .campaign-actions {
        background: #0e1d36;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px;
    }

    .donation-box {
        width: 100%;
    }

    .donation-box h4 {
        color: #fff;
        font-size: 1.7rem;
        margin-bottom: 15px;
    }

    .donation-box p {
        color: rgba(255, 255, 255, .75);
        margin-bottom: 30px;
    }

    .btn-block {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-bottom: 18px;
        text-decoration: none;
        padding: 18px;
        border-radius: 12px;
        font-weight: 600;
        transition: .35s;
    }

    .btn-primary {
        background: #d4af37;
        color: #fff;
    }

    .btn-primary:hover {
        background: #b8921b;
    }

    .btn-outline {
        border: 2px solid rgba(255, 255, 255, .2);
        color: #fff;
    }

    .btn-outline:hover {
        background: #fff;
        color: #0e1d36;
    }

    .donation-box small {
        display: block;
        color: rgba(255, 255, 255, .6);
        margin-top: 15px;
        line-height: 1.7;
    }

    @media(max-width:991px) {

        .campaign-card {
            grid-template-columns: 1fr;
        }

        .campaign-content,
        .campaign-actions {
            padding: 40px 30px;
        }

    }
</style>

<?php include 'include/footer.php'; ?>
<?php include 'include/script.php'; ?>