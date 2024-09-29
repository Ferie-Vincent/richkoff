<div class="cs-side_header">
    <button class="cs-close"></button>
    <div class="cs-side_header_overlay"></div>
    <div class="cs-side_header_in">
        <div class="cs-side_header_shape"></div>
        <a class="cs-site_branding" href="./">
            <img src="{{asset('assets/images_/commun/logo.png') }}" alt="Logo" width="100%" />
        </a>
        <div class="cs-side_header_box">
            <h3 class="cs-side_header_title cs-primary_color">
                Coffret découverte
            </h3>
            <div class="cs-side_header_box">
                <h2 class="cs-side_header_heading">
                    Pack d'échantillon (30.000F XOF)
                </h2>
                <p>
                    Explorez nos fragrances les plus exquises avec notre coffret découverte! Veuillez noter que la livraison varie en fonction de votre
                    zone géographique et de la disponibilité des produits.
                </p>
            </div>
            <div class="cs-newsletter cs-style1">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form id="cs-form" action="{{ route('form.submit') }}" method="POST" class="row">
                    @csrf <!-- Token CSRF -->
                    <input type="hidden" name="access_key" value="6d7bc3fc-6190-43c5-8298-89ac5ef7494f" />
                    <input type="checkbox" name="botcheck" style="display: none" />
                    <div class="col-sm-12">
                        <label class="cs-primary_color" for="full-name">Nom & Prénoms<sup>*</sup></label>
                        <input type="text" class="cs-shop-input" name="full-name" id="full-name" value="{{ old('full-name') }}" required />
                        @error('full-name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-12">
                        <label class="cs-primary_color" for="tel">Votre numéro de téléphone <sup>*</sup> (Précisez l'indicatif svp)</label>
                        <input type="text" class="cs-shop-input" name="telephone" id="tel" value="{{ old('telephone') }}" required />
                        @error('telephone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-12">
                        <label class="cs-primary_color" for="number">Quantité</label>
                        <input type="number" class="cs-shop-input" name="quantity" id="number" value="{{ old('quantity') }}" required />
                        @error('quantity')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-12">
                        <label class="cs-shop-label" for="amount">Moyen de paiement</label>
                        <select class="cs-shop-input" id="amount" name="paiement" required>
                            <option value="">Choisir...</option>
                            <option value="Mobile Money" {{ old('paiement') == 'Mobile Money' ? 'selected' : '' }}>Mobile Money</option>
                            <option value="Sur place(Showroom Richkoff)" {{ old('paiement') == 'Sur place(Showroom Richkoff)' ? 'selected' : '' }}>Sur place(Showroom Richkoff)</option>
                        </select>
                        @error('paiement')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <button class="cs-btn cs-style1" type="submit" name="submitForm">
                            <span>Envoyer</span>
                            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>