@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <section class="hero-section" style="background-image: url('{{ get_theme_file_uri('resources/images/coffee-hero-bg.jpg') }}');">
    <div class="hero-content">
      <h2 class="hero-subtitle">Welcome to</h2>
      <h1 class="hero-title">Grind Coffee Shop</h1>
      <p class="mb-8">Experience the finest coffee beans from around the world, expertly brewed to perfection.</p>
      <a href="{{ home_url('/menu') }}" class="btn-primary">View Our Menu</a>
    </div>
  </section>

  <!-- About Section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="section-title">
        <h2>Our Story</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
          <img src="{{ get_theme_file_uri('resources/images/about-coffee.jpg') }}" alt="About Grind Coffee" class="rounded-lg shadow-lg w-full h-auto wow fadeInUp">
        </div>
        <div>
          <h3 class="text-2xl font-secondary text-primary mb-4 wow fadeInUp">Passion for Quality Coffee</h3>
          <p class="mb-4 wow fadeInUp" data-wow-delay="0.1s">Founded in 2023, Grind Coffee Shop was born out of a passion for exceptional coffee and a desire to create a warm, welcoming space for our community.</p>
          <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">We source our beans directly from sustainable farms around the world, ensuring fair prices for farmers and the highest quality for our customers.</p>
          <p class="mb-6 wow fadeInUp" data-wow-delay="0.3s">Every cup is crafted with care by our skilled baristas, who are dedicated to the art and science of coffee making.</p>
          <a href="{{ home_url('/about') }}" class="btn-primary wow fadeInUp" data-wow-delay="0.4s">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Products Section -->
  <section class="py-16 bg-light">
    <div class="container mx-auto px-4">
      <div class="section-title">
        <h2>Featured Products</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Coffee Card 1 -->
        <div class="coffee-card">
          <div class="coffee-card-img">
            <img src="{{ get_theme_file_uri('resources/images/coffee-1.jpg') }}" alt="Ethiopian Yirgacheffe">
          </div>
          <div class="coffee-card-content">
            <h3 class="coffee-card-title">Ethiopian Yirgacheffe</h3>
            <div class="coffee-card-price">$18.99</div>
            <p class="coffee-card-description">A bright, fruity coffee with notes of citrus, berries, and a floral aroma.</p>
            <a href="#" class="btn-primary">Add to Cart</a>
          </div>
        </div>
        
        <!-- Coffee Card 2 -->
        <div class="coffee-card">
          <div class="coffee-card-img">
            <img src="{{ get_theme_file_uri('resources/images/coffee-2.jpg') }}" alt="Colombian Supremo">
          </div>
          <div class="coffee-card-content">
            <h3 class="coffee-card-title">Colombian Supremo</h3>
            <div class="coffee-card-price">$16.99</div>
            <p class="coffee-card-description">A well-balanced coffee with a rich body, caramel sweetness, and nutty undertones.</p>
            <a href="#" class="btn-primary">Add to Cart</a>
          </div>
        </div>
        
        <!-- Coffee Card 3 -->
        <div class="coffee-card">
          <div class="coffee-card-img">
            <img src="{{ get_theme_file_uri('resources/images/coffee-3.jpg') }}" alt="Sumatra Mandheling">
          </div>
          <div class="coffee-card-content">
            <h3 class="coffee-card-title">Sumatra Mandheling</h3>
            <div class="coffee-card-price">$19.99</div>
            <p class="coffee-card-description">A full-bodied, earthy coffee with low acidity and notes of dark chocolate and spice.</p>
            <a href="#" class="btn-primary">Add to Cart</a>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-12">
        <a href="{{ home_url('/shop') }}" class="btn-primary">View All Products</a>
      </div>
    </div>
  </section>

  <!-- Menu Highlights Section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="section-title">
        <h2>Menu Highlights</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-light p-8 rounded-lg shadow-md">
          <h3 class="text-xl font-secondary text-primary mb-4">Coffee Selections</h3>
          <ul class="space-y-4">
            <li class="flex justify-between items-center">
              <span class="font-medium">Espresso</span>
              <span class="text-accent font-semibold">$3.50</span>
            </li>
            <li class="flex justify-between items-center">
              <span class="font-medium">Cappuccino</span>
              <span class="text-accent font-semibold">$4.75</span>
            </li>
            <li class="flex justify-between items-center">
              <span class="font-medium">Latte</span>
              <span class="text-accent font-semibold">$4.95</span>
            </li>
            <li class="flex justify-between items-center">
              <span class="font-medium">Mocha</span>
              <span class="text-accent font-semibold">$5.25</span>
            </li>
            <li class="flex justify-between items-center">
              <span class="font-medium">Cold Brew</span>
              <span class="text-accent font-semibold">$4.50</span>
            </li>
          </ul>
        </div>
        
        <div class="bg-light p-8 rounded-lg shadow-md">
          <h3 class="text-xl font-secondary text-primary mb-4">Pastries & Snacks</h3>
          <ul class="space-y-4">
            <li class="flex justify-between items-center">
              <span class="font-medium">Croissant</span>
              <span class="text-accent font-semibold">$3.95</span>
            </li>
            <li class="flex justify-between items-center">
              <span class="font-medium">Chocolate Muffin</span>
              <span class="text-accent font-semibold">$3.75</span>
            </li>
            <li class="flex justify-between items-center">
              <span class="font-medium">Avocado Toast</span>
              <span class="text-accent font-semibold">$7.95</span>
            </li>
            <li class="flex justify-between items-center">
              <span class="font-medium">Breakfast Sandwich</span>
              <span class="text-accent font-semibold">$6.95</span>
            </li>
            <li class="flex justify-between items-center">
              <span class="font-medium">Cinnamon Roll</span>
              <span class="text-accent font-semibold">$4.25</span>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="text-center mt-12">
        <a href="{{ home_url('/menu') }}" class="btn-primary">View Full Menu</a>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="py-16 bg-light">
    <div class="container mx-auto px-4">
      <div class="section-title">
        <h2>What Our Customers Say</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <div class="testimonial">
          <div class="testimonial-img">
            <img src="{{ get_theme_file_uri('resources/images/testimonial-1.jpg') }}" alt="Customer 1">
          </div>
          <p class="testimonial-text">"The best coffee I've ever had! The atmosphere is cozy and the staff is incredibly friendly. This is my go-to spot for morning coffee."</p>
          <h4 class="testimonial-name">Sarah Johnson</h4>
          <p class="testimonial-position">Regular Customer</p>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="testimonial">
          <div class="testimonial-img">
            <img src="{{ get_theme_file_uri('resources/images/testimonial-2.jpg') }}" alt="Customer 2">
          </div>
          <p class="testimonial-text">"I love their Ethiopian blend! The quality of the coffee is outstanding, and the pastries are always fresh. Highly recommend!"</p>
          <h4 class="testimonial-name">Michael Chen</h4>
          <p class="testimonial-position">Coffee Enthusiast</p>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="testimonial">
          <div class="testimonial-img">
            <img src="{{ get_theme_file_uri('resources/images/testimonial-3.jpg') }}" alt="Customer 3">
          </div>
          <p class="testimonial-text">"Perfect spot for remote work. The Wi-Fi is reliable, the coffee is delicious, and the ambiance is just right for productivity."</p>
          <h4 class="testimonial-name">Emily Rodriguez</h4>
          <p class="testimonial-position">Freelance Designer</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="section-title">
        <h2>Visit Us</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <div>
          <div class="contact-info">
            <div class="contact-item">
              <div class="contact-icon">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
              </div>
              <div class="contact-text">
                <h4>Address</h4>
                <p>123 Coffee Street, Brewville, BC 12345</p>
              </div>
            </div>
            
            <div class="contact-item">
              <div class="contact-icon">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <div class="contact-text">
                <h4>Opening Hours</h4>
                <p>Monday - Friday: 7:00 AM - 8:00 PM</p>
                <p>Saturday: 8:00 AM - 9:00 PM</p>
                <p>Sunday: 8:00 AM - 6:00 PM</p>
              </div>
            </div>
            
            <div class="contact-item">
              <div class="contact-icon">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
              </div>
              <div class="contact-text">
                <h4>Phone</h4>
                <p>+1 (555) 123-4567</p>
              </div>
            </div>
            
            <div class="contact-item">
              <div class="contact-icon">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
              <div class="contact-text">
                <h4>Email</h4>
                <p>info@grindcoffee.com</p>
              </div>
            </div>
          </div>
        </div>
        
        <div>
          <form class="contact-form">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <input type="text" placeholder="Your Name" required>
              </div>
              <div>
                <input type="email" placeholder="Your Email" required>
              </div>
            </div>
            <input type="text" placeholder="Subject">
            <textarea placeholder="Your Message" required></textarea>
            <button type="submit" class="btn-primary">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="py-12 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-2xl font-secondary mb-4">Subscribe to Our Newsletter</h2>
      <p class="mb-6 max-w-2xl mx-auto">Stay updated with our latest offers, new coffee arrivals, and exclusive promotions.</p>
      <form class="flex flex-col md:flex-row max-w-lg mx-auto">
        <input type="email" placeholder="Your Email Address" class="flex-grow py-3 px-4 mb-2 md:mb-0 md:mr-2 text-dark rounded-md">
        <button type="submit" class="bg-secondary hover:bg-accent text-white py-3 px-6 rounded-md transition-colors duration-300">Subscribe</button>
      </form>
    </div>
  </section>
@endsection
