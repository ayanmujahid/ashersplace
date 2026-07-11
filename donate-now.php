<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>


<main>

<section class="page-hero page-hero-sm">
    <div class="page-hero-decor"></div>

    <div class="container page-hero-inner">
        <p class="eyebrow eyebrow-light">Secure Donation</p>

        <h1 class="page-hero-title">
            Make a Donation
        </h1>

        <p class="page-hero-lede">
            Every contribution helps provide safe housing, essential resources,
            and compassionate support for individuals rebuilding their lives.
        </p>
    </div>
</section>


<section class="donate-page">

    <div class="container">

        <div class="donate-wrapper">

            <!-- LEFT -->

            <div class="donate-info">

                <span class="donation-tag">
                    Secure Payment
                </span>

                <h2>
                    Your Donation Changes Lives
                </h2>

                <p>
                    Your generosity directly supports Asher's Place Community Homes'
                    mission of providing safe, stable housing for individuals
                    transitioning out of homelessness throughout Southern Ontario.
                </p>

                <div class="impact-list">

                    <div class="impact-item">
                        <i class="fas fa-home"></i>

                        <div>
                            <h5>Housing Support</h5>
                            <p>Helping secure long-term housing opportunities.</p>
                        </div>
                    </div>

                    <div class="impact-item">
                        <i class="fas fa-bed"></i>

                        <div>
                            <h5>Essential Furnishings</h5>
                            <p>Beds, furniture, kitchen items and household necessities.</p>
                        </div>
                    </div>

                    <div class="impact-item">
                        <i class="fas fa-users"></i>

                        <div>
                            <h5>Community Support</h5>
                            <p>Case management and life-skills assistance.</p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="donate-card">

                <h3>Donation Amount</h3>

                <form action="stripe-payment.php" method="POST">

                    <div class="amount-grid">

                        <label class="amount-option">
                            <input type="radio" name="amount" value="25">
                            <span>$25</span>
                        </label>

                        <label class="amount-option">
                            <input type="radio" name="amount" value="50" checked>
                            <span>$50</span>
                        </label>

                        <label class="amount-option">
                            <input type="radio" name="amount" value="100">
                            <span>$100</span>
                        </label>

                        <label class="amount-option">
                            <input type="radio" name="amount" value="250">
                            <span>$250</span>
                        </label>

                    </div>

                    <div class="form-group">

                        <label>Or Enter Your Own Amount</label>

                        <div class="amount-input">

                            <span>$</span>

                            <input
                                type="number"
                                min="1"
                                step="1"
                                name="custom_amount"
                                placeholder="Enter donation amount">

                        </div>

                    </div>

                    <div class="form-group">

                        <label>Full Name</label>

                        <input
                            type="text"
                            name="name"
                            required>

                    </div>

                    <div class="form-group">

                        <label>Email Address</label>

                        <input
                            type="email"
                            name="email"
                            required>

                    </div>

                    <!-- Stripe Card Element Goes Here -->

                    <div class="form-group">

                        <label>Payment Details</label>

                        <div id="card-element"></div>

                    </div>

                    <button class="btn-primary btn-full">

                        <i class="fas fa-lock"></i>

                        Donate Securely

                    </button>

                    <div class="secure-text">

                        <i class="fas fa-shield-alt"></i>

                        Payments are securely processed by Stripe using SSL encryption.

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>
</main>

<style>
    .donate-page{
    padding:100px 0;
    background:#f7f9fc;
}

.donate-wrapper{
    display:grid;
    grid-template-columns:1.2fr .8fr;
    gap:60px;
    align-items:start;
}

.donate-info h2{
    font-size:2.4rem;
    margin:20px 0;
}

.donate-info p{
    color:#666;
    line-height:1.9;
}

.donation-tag{
    background:#d4af37;
    color:#fff;
    padding:8px 18px;
    border-radius:50px;
    display:inline-block;
    font-weight:600;
}

.impact-list{
    margin-top:40px;
}

.impact-item{
    display:flex;
    gap:20px;
    margin-bottom:30px;
}

.impact-item i{
    width:55px;
    height:55px;
    border-radius:50%;
    background:#d4af37;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:20px;
}

.donate-card{
    background:#fff;
    border-radius:20px;
    padding:40px;
    box-shadow:0 15px 45px rgba(0,0,0,.08);
}

.donate-card h3{
    margin-bottom:30px;
}

.amount-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:15px;
    margin-bottom:30px;
}

.amount-option input{
    display:none;
}

.amount-option span{
    display:block;
    text-align:center;
    padding:18px;
    border:2px solid #ddd;
    border-radius:12px;
    cursor:pointer;
    font-weight:700;
    transition:.3s;
}

.amount-option input:checked+span{
    background:#d4af37;
    border-color:#d4af37;
    color:#fff;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:10px;
    font-weight:600;
}

.form-group input{
    width:100%;
    height:55px;
    border:1px solid #ddd;
    border-radius:10px;
    padding:0 15px;
}

.amount-input{
    display:flex;
    align-items:center;
    border:1px solid #ddd;
    border-radius:10px;
    overflow:hidden;
}

.amount-input span{
    width:55px;
    text-align:center;
    background:#f4f4f4;
    font-weight:bold;
}

.amount-input input{
    border:none;
}

#card-element{
    border:1px solid #ddd;
    border-radius:10px;
    padding:18px;
    background:#fff;
}

.btn-full{
    width:100%;
    height:58px;
    border:none;
    border-radius:10px;
    background:#d4af37;
    color:#fff;
    font-size:17px;
    font-weight:700;
    cursor:pointer;
}

.secure-text{
    margin-top:20px;
    text-align:center;
    color:#777;
    font-size:14px;
}

@media(max-width:991px){

.donate-wrapper{
    grid-template-columns:1fr;
}

.donate-card{
    padding:30px;
}

}
</style>

<?php include 'include/footer.php'; ?>
<?php include 'include/script.php'; ?>