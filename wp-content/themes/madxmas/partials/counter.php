<div class="padding-top-bottom-alt full-width flex wrap center align-items counter-responsive home">
    <div id="counterContainer4" class="counterContainer third-width flex wrap center align-items">
        <div class="counter" id="counter4">0</div>
        <div class="counter">Years</div>
        <p class="copy full-width text-center black-copy">Proven Experience</p>
    </div>
    <div id="counterContainer5" class="counterContainer third-width flex wrap center align-items">
        <div class="counter black-copy" id="counter5">0</div>
        <div class="counter black-copy">+ Projects</div>
        <p class="copy full-width text-center black-copy">Completed</p>
    </div>
    <div id="counterContainer6" class="counterContainer third-width flex wrap center align-items">
        <div class="counter black-copy" id="counter6">0</div>
        <div class="counter black-copy">+ Repos</div>
        <p class="copy full-width text-center black-copy">Created & Maintained</p>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const counter4 = document.getElementById("counter4");
        const counter5 = document.getElementById("counter5");
        const counter6 = document.getElementById("counter6");
        const counterContainer4 = document.getElementById("counterContainer4");
        const counterContainer5 = document.getElementById("counterContainer5");
        const counterContainer6 = document.getElementById("counterContainer6");
        const targetValue = 10; // End value of the counter
        const targetValue2 = 50; // End value of the counter
        const targetValue3 = 100; // End value of the counter
        const duration = 2000; // Total duration in milliseconds
        const duration2 = 5000; // Total duration in milliseconds
        const duration3 = 5000; // Total duration in milliseconds
        const interval = 50; // Interval time in milliseconds
        const increment = targetValue / (duration / interval);
        const increment2 = targetValue2 / (duration2 / interval);
        const increment3 = targetValue3 / (duration3 / interval);

        let currentValue = 0;

        const animation = setInterval(() => {
            currentValue += increment;
            if (currentValue >= targetValue) {
                currentValue = targetValue; // Ensure it ends exactly at the target
                clearInterval(animation); // Stop the animation
            }
            counter4.textContent = Math.floor(currentValue); // Update the counter
        }, interval);
        const animation2 = setInterval(() => {
            currentValue += increment2;
            if (currentValue >= targetValue2) {
                currentValue = targetValue2; // Ensure it ends exactly at the target
                clearInterval(animation2); // Stop the animation
            }
            counter5.textContent = Math.floor(currentValue); // Update the counter
        }, interval);
        const animation3 = setInterval(() => {
            currentValue += increment3;
            if (currentValue >= targetValue3) {
                currentValue = targetValue3; // Ensure it ends exactly at the target
                clearInterval(animation3); // Stop the animation
            }
            counter6.textContent = Math.floor(currentValue); // Update the counter
        }, interval);


        // GSAP animation to slide the counter
        gsap.fromTo(
            counterContainer4,
            {
                y: -300, // Start 300px to the left
                opacity: 0, // Start fully transparent
            },
            {
                y: 0, // Slide into the original position
                opacity: 1, // Fade in to full opacity
                duration: 2, // Animation duration
                ease: "power1.out", // Smooth easing
            }
        );
           // GSAP animation to slide the counter
        gsap.fromTo(
            counterContainer5,
            {
                y: -300, // Start 300px to the left
                opacity: 0, // Start fully transparent
            },
            {
                y: 0, // Slide into the original position
                opacity: 1, // Fade in to full opacity
                duration: 2, // Animation duration
                ease: "power1.out", // Smooth easing
            }
        );
        gsap.fromTo(
            counterContainer6,
            {
                y: -300, // Start 300px to the left
                opacity: 0, // Start fully transparent
            },
            {
                y: 0, // Slide into the original position
                opacity: 1, // Fade in to full opacity
                duration: 2, // Animation duration
                ease: "power1.out", // Smooth easing
            }
        );
    });
</script>