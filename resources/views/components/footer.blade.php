<footer>
    <div class="container">
        <div class="footer_lists">
            @foreach ($footerLists as $list)
                <div>
                    <h4>
                        {{ $list['title'] }}
                    </h4>
                    <ul>
                        @foreach ($list['links'] as $link)
                            <li>
                                <a href="#">
                                    {{ $link }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
        <img src="{{ asset('/storage/assets/dc-logo-bg.png')}}" alt="">
    </div>

    <section>
        <div class="container">
            <a class="sign-up" href="#">
                SIGN-UP NOW!
            </a>
            <ul>
                <li>
                    <a href="#">
                        
                    </a>
                </li>
            </ul>
        </div>
    </section>
</footer>