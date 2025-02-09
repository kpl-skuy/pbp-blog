<header>
    <a class="logo" href="/">
        <img class="ml-4 p-0" src="/logo.ico" alt="">
    </a>

    <div class="right-area">
        <form action="/post" method="get" class="src-form">
            <button type="submit"><i class="ion-search"></i></a></button>
            <input type="text" placeholder="Search here" name="keyword">
        </form><!-- src-form -->
    </div><!-- right-area -->

    <ul class="main-menu d-lg-flex" id="main-menu">
        <li class="ml-lg-3"><a href="/post" class="mr-2">Home</a></li>
        <li class="drop-down"><a href="#!">Kategori<i class="ion-arrow-down-b"></i></a>
            <ul class="drop-down-menu drop-down-inner">
                <?php foreach ($allkategori as $k) : ?>
                    <li><a href="/post/category/<?= strtolower($k["nama"]) ?>"><?= ucfirst($k["nama"]) ?></a></li>
                <?php endforeach ?>
            </ul>
        </li>
        <li class="ml-lg-3"><a href="/about" class="mr-2">Tentang Kami</a></li>
        <li class="ml-auto"><a href="/authpenulis"><button class="btn btn-primary">Masuk</button></a></li>
        <li class=""><a href="/authpenulis/register"><button class="btn btn-success">Daftar</button></a></li>
    </ul>

    <div class="clearfix"></div>
</header>