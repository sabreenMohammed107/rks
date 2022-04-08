 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('adminassets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
          <p>Green House</p>

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="البحث..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form> --}}
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active treeview">
          <a href="{{ url('/home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          {{-- <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul> --}}
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>الإعدادات</span>
            <i class="fa fa-angle-left pull-right"></i>
            {{-- <span class="label label-primary pull-right">4</span> --}}
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin-team.index') }}"><i class="fa fa-circle-o"></i> فريق العمل</a></li>

            {{-- <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> المستخدمين </a></li>
            <li><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i> الأدوار </a></li>  --}}

            {{-- <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> المستخدمين </a></li>
            <li><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i> الأدوار </a></li> --}}
            {{-- <li><a href="fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li> --}}
          </ul>
        </li>

        {{-- <li>
          <a href="widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
          </a>
        </li> --}}

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>المقالات</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
             <li><a href="{{ route('admin-blogs.index') }}"><i class="fa fa-circle-o"></i> عرض المقالات </a></li>
            <li><a href="{{ route('admin-blogs.create') }}"><i class="fa fa-circle-o"></i> انشاء مقالة </a></li>

            {{-- <li><a href="{{ route('size.index') }}"><i class="fa fa-circle-o"></i> المقاسات </a></li>
            <li><a href="{{ route('color.index') }}"><i class="fa fa-circle-o"></i> الالوان </a></li>
            <li><a href="{{ route('articles.index') }}"><i class="fa fa-circle-o"></i> المقالات </a></li> --}}

          </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>الخدمات</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{ route('company-service.index') }}"><i class="fa fa-circle-o"></i> خدمات الشركة </a></li>
              <li><a href="{{ route('general-advices.index') }}"><i class="fa fa-circle-o"></i> نصائح عامة </a></li>
              <li><a href="{{ route('farmer-advices.index') }}"><i class="fa fa-circle-o"></i> نصائح زراعية </a></li>

              {{-- <li><a href="{{ route('size.index') }}"><i class="fa fa-circle-o"></i> المقاسات </a></li>
              <li><a href="{{ route('color.index') }}"><i class="fa fa-circle-o"></i> الالوان </a></li>
              <li><a href="{{ route('articles.index') }}"><i class="fa fa-circle-o"></i> المقالات </a></li> --}}

            </ul>
          </li>

        <li class="treeview">
            <a href="">
              <i class="fa fa-edit"></i>
              <span>معرض الصور</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin-gallery-category.index') }}"><i class="fa fa-circle-o text-red"></i> <span> تصنيفات معرض الصور</span></a>
                    <li><a href="{{ route('admin-gallery.index') }}"><i class="fa fa-circle-o"></i> معرض الصور</a></li>

                {{-- <li>
                    <a href="{{ route('category.index') }}"><i class="fa fa-circle-o text-red"></i> <span>عرض التصنيفات</span></a>
                </li>
                  <li><a href="{{ route('category.create') }}"><i class="fa fa-circle-o"></i> اضافه تصنيف</a></li> --}}

            </ul>
          </li>
          <li class="treeview">
            <a href="">
              <i class="fa fa-edit"></i>
              <span>المنتجات</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin-products.index') }}"><i class="fa fa-circle-o text-red"></i> <span>عرض المنتجات</span></a>
                </li>
                {{-- <li>
                    <a href="{{ route('admin-product-category.index') }}"><i class="fa fa-circle-o text-red"></i> <span>تصنيفات المنتجات</span></a>
                </li>
                <li>
                    <a href="{{ route('admin-accessories.index') }}"><i class="fa fa-circle-o text-red"></i> <span> اكسسوار</span></a>
                </li>
                <li>
                    <a href="{{ route('admin-glasses.index') }}"><i class="fa fa-circle-o text-red"></i> <span> زجاج</span></a>
                </li>

                 <li>
                    <a href="{{ route('admin-product.index') }}"><i class="fa fa-circle-o text-red"></i> <span>عرض المنتجات</span></a>
                </li> --}}
                 {{-- <li><a href="{{ route('product.create') }}"><i class="fa fa-circle-o"></i> اضافه منتج</a></li> --}}

            </ul>
          </li>


        <li class="treeview">
          <a href="">
            <i class="fa fa-edit"></i>
            <span>بيانات العملاء </span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin-partners.index') }}"><i class="fa fa-circle-o"></i> شركاء النجاح</a></li>
            {{--
 <li><a href="{{ route('admin-team.index') }}"><i class="fa fa-circle-o"></i> فريق العمل</a></li>
            <li><a href="{{ route('admin-order.index') }}"><i class="fa fa-circle-o"></i> الاوردر</a></li>
            <li><a href="sliders.html"><i class="fa fa-circle-o"></i> المفضلة</a></li> --}}

          </ul>
        </li>
        <li class="header">خاص بالوقع</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>الموقع</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('home-slider.index') }}"><i class="fa fa-circle-o"></i>  الصور الرئيسيه </a></li>
            <li><a href="{{ route('admin-company.index') }}"><i class="fa fa-circle-o"></i> عن الشركه </a></li>
            <li><a href="{{ route('admin-company-contact.index') }}"><i class="fa fa-circle-o"></i> التواصل</a></li>
            <li><a href="{{ route('whyus.index') }}"><i class="fa fa-circle-o"></i> نحن لماذا</a></li>
            {{-- <li><a href="{{ route('admin-slider.index') }}"><i class="fa fa-circle-o"></i>صور الصفحة الرئيسيه</a></li>


          --}}

        </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>رسائل</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin-contact-form') }}"><i class="fa fa-circle-o"></i> تواصل معنا </a></li>
             <li><a href="{{ route('admin-feedback.index') }}"><i class="fa fa-circle-o"></i> اراء العملاء </a></li>

            {{-- <li><a href="{{ route('admin-contact-form') }}"><i class="fa fa-circle-o"></i> تواصل معنا </a></li> --}} --}}
         </ul>
        </li>

        {{-- <li>
          <a href="calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <small class="label pull-right bg-red">3</small>
          </a>
        </li>

        <li class="treeview">
          <a href="mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="mailbox.html">Inbox <span class="label label-primary pull-right">13</span></a></li>
            <li><a href="compose.html">Compose</a></li>
            <li><a href="read-mail.html">Read</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>

        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>

        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> --}}
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
