@include('layout.header')






<br>
<br>
<!-- Main Content -->
<main class="container mx-auto px-4 py-8">
    <section class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Services</h2>
        <p class="text-lg mb-4">
            Welcome to [Your Company Name]! We are passionate about delivering exceptional services and products to
            our valued customers. Our mission is to make your life easier, more enjoyable, and more fulfilling.
        </p>
        <p class="text-lg">
            Founded in [Year], [Your Company Name] has grown to become a trusted name in the industry. Our team of
            dedicated professionals is committed to providing top-notch service and ensuring customer satisfaction
            at every step.
        </p>
    </section>

    <section class="mb-8">
        <h3 class="text-xl font-bold mb-4">Our Mission</h3>
        <p class="text-lg">
            At [Your Company Name], our mission is to:
        </p>
        <ul class="list-disc list-inside ml-4 text-lg">
            <li>Provide high-quality products and services</li>
            <li>Ensure customer satisfaction and support</li>
            <li>Innovate and adapt to changing market needs</li>
            <li>Promote sustainability and eco-friendly practices</li>
        </ul>
    </section>

    <section class="mb-8">
        <h3 class="text-xl font-bold mb-4">Our Team</h3>
        <p class="text-lg mb-4">
            Our team is comprised of talented and experienced professionals who are dedicated to making a positive
            impact. Meet the people who make it all happen:
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Team Member 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ url('/landing-photos/about-photos/ceo.png') }}" alt="Team Member 1"
                    class="w-full h-48 object-cover rounded-t-lg mb-4">
                <h4 class="text-lg font-bold mb-2">Patnam Saignanendra</h4>
                <p class="text-gray-700">CEO & Founder</p>
            </div>
            <!-- Team Member 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ url('/landing-photos/about-photos/ceo.png') }}" alt="Team Member 2"
                    class="w-full h-48 object-cover rounded-t-lg mb-4">
                <h4 class="text-lg font-bold mb-2">Jane Smith</h4>
                <p class="text-gray-700">Chief Operating Officer</p>
            </div>
            <!-- Team Member 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ url('/landing-photos/about-photos/ceo.png') }}" alt="Team Member 3"
                    class="w-full h-48 object-cover rounded-t-lg mb-4">
                <h4 class="text-lg font-bold mb-2">Alice Johnson</h4>
                <p class="text-gray-700">Head of Marketing</p>
            </div>
            <!-- Add more team members as needed -->
        </div>
    </section>

    <section>
        <h3 class="text-xl font-bold mb-4">Contact Us</h3>
        <p class="text-lg mb-4">
            We'd love to hear from you! If you have any questions, comments, or feedback, please reach out to us.
        </p>
        <ul class="list-none text-lg">
            <li>Email: <a href="mailto:info@yourcompany.com" class="text-blue-600">info@yourcompany.com</a></li>
            <li>Phone: <a href="tel:+1234567890" class="text-blue-600">+1 234 567 890</a></li>
            <li>Address: 1234 Street Name, City, State, ZIP</li>
        </ul>
    </section>
</main>

<!-- Footer -->
@include('layout.footer')

</body>

<script>
    var scrollpos = window.scrollY;
    var header = document.getElementById("header");
    var navcontent = document.getElementById("nav-content");
    var navaction = document.getElementById("navAction");
    var brandname = document.getElementById("brandname");
    var toToggle = document.querySelectorAll(".toggleColour");

    document.addEventListener("scroll", function() {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
            header.classList.add("bg-white");
            navaction.classList.remove("bg-white");
            navaction.classList.add("gradient");
            navaction.classList.remove("text-gray-800");
            navaction.classList.add("text-white");
            //Use to switch toggleColour colours
            for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-gray-800");
                toToggle[i].classList.remove("text-white");
            }
            header.classList.add("shadow");
            navcontent.classList.remove("bg-gray-100");
            navcontent.classList.add("bg-white");
        } else {
            header.classList.remove("bg-white");
            navaction.classList.remove("gradient");
            navaction.classList.add("bg-white");
            navaction.classList.remove("text-white");
            navaction.classList.add("text-gray-800");
            //Use to switch toggleColour colours
            for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-white");
                toToggle[i].classList.remove("text-gray-800");
            }

            header.classList.remove("shadow");
            navcontent.classList.remove("bg-white");
            navcontent.classList.add("bg-gray-100");
        }
    });
</script>
<script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;

    function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else {
                    navMenuDiv.classList.add("hidden");
                }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
        }
    }

    function checkParent(t, elm) {
        while (t.parentNode) {
            if (t == elm) {
                return true;
            }
            t = t.parentNode;
        }
        return false;
    }
</script>

</html>
