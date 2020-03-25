@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-3 col-lg-3">
        <a class="btn btn-primary" href="{{ route('annonces.create') }}" role="button">Déposer une annonce</a>
        </div>
        <div class="col-12 col-md-9 col-lg-9">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:amcharts="http://amcharts.com/ammap" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 1500 1500">
                <g>
                    <a href="{{ route('annonces.index', 'lolo') }}" id="GA-7">
                        <path data-toggle="tooltip" title="Ogooué-Lolo" class="base" d="M566.25,285.25L539.29,279.21L518.45,372.25L395.22,420.6L393.4,470.08L421.65,463.4L459.05,509.3L459.35,541.75L517.41,578.41L535.75,568.38L557.48,577.22L580.69,519.36L616.14,490.24L614.9,470.56L629.6,476.11L669.89,422.82L627.74,344.59L631.88,311.25L599.86,286.21L566.25,285.25z"/>
                    </a>
                    <a href="{{ route('annonces.index', 'haut') }}" id="GA-2">
                        <path data-toggle="tooltip" title="Haut-Ogooué" class="base" d="M657.73,312.3L631.88,311.25L627.74,344.59L669.89,422.82L629.6,476.11L614.9,470.56L616.14,490.24L580.69,519.36L557.48,577.22L594.27,630.38L588.87,643.6L656.33,653.06L695.47,605.66L717.91,641.86L711.85,658.56L743.22,660.99L763.1,641.19L751.21,623.26L792.62,549.06L781.06,538.84L797.98,510.93L784.81,455.78L799.54,403.72L780.21,380.37L752.82,379.52L743.96,354.94L713.95,352.72L715.42,329.53L657.73,312.3z"/>
                    </a>
                    <a href="{{ route('annonces.index', 'maritime') }}" id="GA-8">
                        <path data-toggle="tooltip" title="Ogooué-Maritime" class="base" d="M45.27,420.89L43.02,398.48L35.43,407.96L45.27,420.89zM120.89,396.44L84.53,354.25L43.96,437.28L32.61,411.48L20.96,427.04L0.46,397.62L20.3,443.87L22.68,442.97L25.51,450.93L33.53,449.52L29.68,455.73L24.13,451.38L37.79,468.93L41.58,484.9L42,475.92L46.93,481.19L47.58,484.39L44.9,486.34L45.31,493.45L57.13,502.25L62.55,500.31L64.13,508.97L67.95,511.09L88.57,493.57L81.85,532.51L105.24,519.34L119.43,538.23L80.97,547.52L78.82,528.28L64.3,519.01L53.71,501.86L49.85,499.29L47.72,499.5L45.05,496.52L40.12,486.34L44.67,498.05L61.91,522.17L72.68,534.4L77.55,569.58L113.67,582.15L117.18,602.05L106.72,581.6L79.73,575.29L124.58,640.82L202.42,669.5L176.95,678.92L158.05,655.22L139.24,653.34L174.8,695.01L224.91,681.14L239.29,648.81L263.67,634.98L243.3,587.36L176.9,568.11L162.69,548.6L189.23,489.73L167.72,476.81L169.53,446.17L135.54,432.76L120.89,396.44z"/>
                    </a>
                    <a href="{{ route('annonces.index', 'nyanga') }}">
                        <path data-toggle="tooltip" title="Nyanga" class="base" d="M333.46,859.34L347.02,826.28L384.21,800.35L409.45,825.47L441.36,821.98L431.74,805.69L447.79,771.92L412.43,753.69L424.94,730.89L391.5,703.22L326.8,628.61L263.67,634.98L239.29,648.81L224.91,681.14L174.8,695.01L267.56,773.36L269.08,792.43L333.46,859.34z"/>
                    </a>
                    <a href="{{ route('annonces.index', 'ngounie') }}">
                        <path data-toggle="tooltip" title="Ngounié" class="base" d="M395.22,420.6L339.69,396.07L271,402.98L229.27,476.71L207.01,474.17L189.23,489.73L162.69,548.6L176.9,568.11L243.3,587.36L263.67,634.98L326.8,628.61L391.5,703.22L403.73,679.48L395.72,637.72L421.86,649.48L518.69,637.75L517.41,578.41L459.35,541.75L459.05,509.3L421.65,463.4L393.4,470.08L395.22,420.6z"/>
                    </a>
                    <a href="{{ route('annonces.index', 'moyen') }}">
                        <path data-toggle="tooltip" title="Moyen-Ogooué" class="base" d="M291.19,284.94L272.13,287.92L255.55,323.61L195.23,368.63L180.28,374.03L166.69,358.47L120.5,374.22L120.89,396.44L135.54,432.76L169.53,446.17L167.72,476.81L189.23,489.73L207.01,474.17L229.27,476.71L271,402.98L339.69,396.07L395.22,420.6L356.33,326.68L398.01,285.17L291.19,284.94z"/>
                    </a>
                    <a href="{{ route('annonces.index', 'ntem') }}">
                        <path data-toggle="tooltip" title="Wouleu-Ntem" class="base" d="M366.18,0L364.07,179.27L237.22,178.85L235.72,228.77L312.42,204.18L291.19,284.94L398.01,285.17L383.47,268.36L483.65,200.06L504.31,146.83L618.6,148.5L626.11,120.21L610.99,97.56L630.27,6.18L423.53,2.81L366.18,0z"/>
                    </a>
                    <a href="{{ route('annonces.index', 'ivindo') }}">
                        <path data-toggle="tooltip" title="Ogooué-Ivindo" class="base" d="M740.56,127.49L702.57,119.32L618.6,148.5L504.31,146.83L483.65,200.06L383.47,268.36L398.01,285.17L356.33,326.68L395.22,420.6L518.45,372.25L539.29,279.21L566.25,285.25L599.86,286.21L631.88,311.25L657.73,312.3L715.42,329.53L723.29,268.6L741.29,242.57L776.1,231.32L795.28,191.1L765.55,133.59L740.56,127.49z"/>
                    </a>
                    <a href="{{ route('annonces.index', 'estuaire') }}">
                        <path data-toggle="tooltip" title="Estuaire" class="base" d="M95.27,205.37L94.26,205.32L94.65,205.74L95.27,205.37zM150.2,180.52L136.94,170.72L120.37,181.48L126.09,252.25L121.31,234.39L106.28,234.39L116.61,223.02L85.88,230.63L84.47,241.91L110.96,276.79L183.6,290.97L146.83,299.56L154.21,313.61L111.81,290.97L109.58,303.31L91.98,291.92L89.94,267.86L84.53,354.25L120.89,396.44L120.5,374.22L166.69,358.47L180.28,374.03L195.23,368.63L255.55,323.61L272.13,287.92L291.19,284.94L312.42,204.18L235.72,228.77L237.22,178.85L177.42,179.54L172.37,189.5L150.2,180.52z"/>
                    </a>
                </g>
            </svg>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endsection