    <footer class="footer">
        &copy; {{ date('Y') }} E-Shop. All rights reserved.
    </footer>
    @section('css')
        <style>
            .footer {
                background: #1a2236;
                color: #fff;
                text-align: center;
                padding: 18px 0 12px 0;
                font-size: 1rem;
                font-weight: 500;
                letter-spacing: 1px;
                box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.04);
                margin-top: 40px;
            }
        </style>
    @endsection
