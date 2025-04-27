<?php

use App\Connection;

$alert = false;
$success = false;
if(!empty($_POST)){
    $pdo = Connection::getPDO();
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $message = $_POST['message'];
    $subject = $post['subject'];
    $stmt = $pdo->prepare("INSERT INTO request VALUES(?, ?, ?, ?)");
    $ok = $stmt->execute([$name, $mail, $subject, $message]);
    
    if($ok === false){
        $alert = true;
    }else{
        $success = true;
    }
}

?>

<!--/* Start Contact Section */-->

<section id="contact" class="contact-overlay-blue">
            <div class="overlay-blue"></div>
            <div class="contain">
                <div class="white-zone">
                    
                    <?php if($alert): ?>
                        <div class="contain__alert contain__alert--danger">Votre demande n'a pas été envoyé</div>
                    <?php elseif($success): ?>
                        <div class="contain__alert contain__alert--success">Votre demande a bien été envoyé</div>
                    <?php endif; ?>
                    <div class="contain__form">
                    
                        <h2 class="title">Send Message to US</h2>
                        <form class="form" method='POST' action="<?= $router->url('contact') ?>">
                            <input class="form__inp" type="text" name="name" id="name" placeholder="Your Name" required>
                            <input class="form__inp" type="text" name="email" id="email" placeholder=" Your email" required>
                            <input class="form__inp" type="text" name="subject" id="subject" placeholder="Subject" required>
                            <label for="message" ></label>
                            <textarea class="form__area" name="message" id="message" cols="30"
                                rows="10" required style="resize: none;"> </textarea>
                            <!-- <button  class=" form__submit">Send Message</button> -->
                            <input class="form__submit" type="submit" value="Send Message">
                        </form>
                    </div>
                    <div class="contain__info">
                        <h2 class="title">Get In Touch</h2>
                        <div class="info">
                            <p class="info__txt">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ad similique ipsa sapiente
                                consequatur, iure quo nemo perspiciatis nulla
                                officiis incidunt, dignissimos porro inventore
                                necessitatibus voluptate repellat suscipit deleniti,
                                autem neque?


                            <div class="info__address">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor"
                                        viewBox="0 0 384 511">
                                        <path
                                            d="M 368 192 Q 366 117 316 68 L 316 68 Q 267 18 192 16 Q 117 18 68 68 Q 18 117 16 192 Q 16 221 34 262 Q 51 303 79 346 Q 106 389 133 427 Q 161 465 181 489 Q 192 500 203 489 Q 223 465 251 427 Q 278 389 306 346 Q 333 303 350 262 Q 368 220 368 192 L 368 192 Z M 384 192 Q 382 237 352 296 L 352 296 Q 321 355 282 410 L 282 410 Q 243 466 216 499 Q 206 511 192 511 Q 178 511 168 499 Q 141 466 102 410 Q 63 355 32 296 Q 2 237 0 192 Q 2 110 56 56 Q 110 2 192 0 Q 274 2 328 56 Q 382 110 384 192 L 384 192 Z M 192 112 Q 237 113 261 152 Q 283 192 261 232 Q 237 271 192 272 Q 147 271 123 232 Q 101 192 123 152 Q 147 113 192 112 L 192 112 Z M 256 192 Q 255 156 224 137 Q 192 119 160 137 Q 129 156 128 192 Q 129 228 160 247 Q 192 265 224 247 Q 255 228 256 192 L 256 192 Z" />
                                    </svg>

                                    <span>223 Washington ST Boston, MIA 02208</span>
                                </div>
                                <div>

                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor"
                                        viewBox="0 0 514 514">
                                        <path
                                            d="M 317 380 Q 309 389 298 384 Q 242 358 199 315 Q 156 272 130 216 Q 125 205 134 197 L 183 157 Q 196 145 190 129 L 150 33 Q 141 15 122 19 L 34 43 Q 17 48 16 66 Q 17 187 75 284 Q 133 381 230 439 Q 327 497 448 498 Q 466 497 471 480 L 495 392 Q 499 373 481 364 L 385 324 Q 369 318 358 331 L 317 380 L 317 380 Z M 305 370 L 345 321 Q 364 300 391 309 L 487 349 Q 501 355 508 368 Q 514 382 511 397 L 487 485 Q 477 512 448 514 Q 323 513 222 453 Q 121 393 61 292 Q 1 191 0 66 Q 2 37 30 27 L 118 3 Q 132 0 146 6 Q 159 12 165 27 L 205 123 Q 214 150 193 169 L 144 209 Q 169 262 210 304 Q 252 345 305 370 L 305 370 Z" />
                                    </svg>
                                    <span>(017) 007-0038</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor"
                                        viewBox="0 0 512 384">
                                        <path
                                            d="M 64 16 Q 44 17 30 30 L 30 30 Q 17 44 16 64 L 16 92 L 221 257 Q 237 270 256 270 Q 275 270 291 257 L 496 92 L 496 64 Q 495 44 482 30 Q 468 17 448 16 L 64 16 L 64 16 Z M 16 113 L 16 320 Q 17 340 30 354 Q 44 367 64 368 L 448 368 Q 468 367 482 354 Q 495 340 496 320 L 496 113 L 301 270 Q 281 286 256 286 Q 231 286 211 270 L 16 113 L 16 113 Z M 0 64 Q 1 37 19 19 L 19 19 Q 37 1 64 0 L 448 0 Q 475 1 493 19 Q 511 37 512 64 L 512 320 Q 511 347 493 365 Q 475 383 448 384 L 64 384 Q 37 383 19 365 Q 1 347 0 320 L 0 64 L 0 64 Z" />
                                    </svg>
                                    <span>contact@example.com</span>
                                </div>
                            </div>

                            <div class="info__social">
                                <a class="social-link" href="facebook.com">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor"
                                        viewBox="0 0 496 493">
                                        <path
                                            d="M 496 248 Q 495 179 462 123 L 462 123 Q 429 67 373 34 L 373 34 Q 317 1 248 0 Q 179 1 123 34 Q 67 67 34 123 Q 1 179 0 248 Q 2 343 60 410 Q 118 477 209 493 L 209 320 L 146 320 L 146 248 L 209 248 L 209 193 Q 210 147 235 122 Q 260 97 303 97 Q 324 97 341 99 Q 357 101 358 102 Q 358 102 358 102 L 358 163 L 327 163 Q 304 163 295 175 Q 286 186 287 201 L 287 248 L 356 248 L 345 320 L 287 320 L 287 493 Q 378 477 436 410 Q 494 343 496 248 L 496 248 Z" />
                                    </svg>
                                </a>
                                <a class="social-link" href="instagram.com">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor"
                                        viewBox="0 0 448 448">
                                        <path
                                            d="M 224 109 Q 175 110 143 143 L 143 143 Q 110 175 109 224 Q 110 273 143 305 Q 175 338 224 339 Q 273 338 305 305 Q 338 273 339 224 Q 338 175 305 143 Q 273 110 224 109 L 224 109 Z M 224 299 Q 192 298 171 277 L 171 277 Q 150 256 149 224 Q 150 192 171 171 Q 192 150 224 149 Q 256 150 277 171 Q 298 192 299 224 Q 298 256 277 277 Q 256 298 224 299 L 224 299 Z M 371 104 Q 368 129 344 131 Q 319 129 317 104 Q 317 93 325 85 Q 332 78 344 78 Q 355 78 363 85 Q 370 93 371 104 L 371 104 Z M 447 132 Q 447 77 410 38 Q 371 1 317 1 Q 297 0 260 0 Q 224 0 188 0 Q 151 0 132 1 Q 78 1 38 38 Q 1 77 2 131 Q 0 151 0 188 Q 0 224 0 260 Q 0 296 2 316 Q 1 371 38 410 Q 77 447 132 446 Q 151 447 188 448 Q 224 448 260 448 Q 297 447 317 446 Q 371 447 410 410 Q 447 371 447 316 Q 448 296 448 260 Q 448 224 448 188 Q 448 151 447 131 L 447 132 Z M 399 356 Q 386 386 356 399 Q 336 406 302 407 Q 268 408 240 408 Q 231 408 224 408 Q 217 408 208 408 Q 180 408 146 407 Q 113 406 92 399 Q 62 386 49 356 Q 42 335 41 302 Q 40 268 40 240 Q 40 231 40 224 Q 40 217 40 208 Q 40 180 41 146 Q 42 112 49 92 Q 62 62 92 49 Q 113 42 146 41 Q 180 39 208 40 Q 217 40 224 40 Q 231 40 240 40 Q 268 40 302 41 Q 336 42 356 49 Q 386 62 399 92 Q 406 112 407 146 Q 409 180 408 208 Q 408 217 408 224 Q 408 231 408 240 Q 409 268 407 302 Q 406 336 399 356 L 399 356 Z" />
                                    </svg>
                                </a>
                                <a class="social-link" href="twitter.com">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor"
                                        viewBox="0 0 512 416">
                                        <path
                                            d="M 459 104 Q 460 111 460 117 L 460 117 Q 460 117 460 117 Q 460 188 425 256 Q 391 324 324 369 Q 258 414 161 416 Q 71 415 0 369 Q 12 370 25 370 Q 100 369 156 325 Q 120 324 94 304 Q 68 284 58 253 Q 67 254 77 254 Q 92 254 105 251 Q 68 243 45 215 Q 22 187 21 148 L 21 146 Q 42 158 68 160 Q 24 129 21 72 Q 22 43 36 19 Q 75 67 131 96 Q 186 125 252 129 Q 250 117 250 105 Q 251 61 280 31 Q 310 1 354 0 Q 401 1 431 33 Q 467 26 498 8 Q 485 45 452 66 Q 483 62 512 49 Q 490 81 459 104 L 459 104 Z" />
                                    </svg>
                                </a>
                                <a class="social-link" href="linkedin.com">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor"
                                        viewBox="0 0 450 455">
                                        <path
                                            d="M 100 455 L 7 455 L 7 156 L 100 156 L 100 455 Z M 54 115 Q 31 114 16 99 L 16 99 Q 1 84 0 61 Q 1 30 27 14 Q 54 0 81 14 Q 107 30 108 61 Q 107 84 92 99 Q 77 114 54 115 L 54 115 Z M 448 455 L 355 455 L 355 309 Q 357 282 349 257 Q 341 232 307 230 Q 272 231 261 254 Q 250 277 251 307 L 251 455 L 158 455 L 158 156 L 248 156 L 248 197 L 249 197 Q 258 178 280 164 Q 303 149 337 148 Q 405 150 428 189 Q 450 229 448 291 L 448 455 L 448 455 Z" />
                                    </svg>
                                </a>

                                <a class="social-link" href="whatsApp.com">

                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor"
                                        viewBox="0 0 448 448">
                                        <path
                                            d="M 381 65 Q 315 1 224 0 Q 162 1 112 30 Q 62 60 32 110 Q 3 160 2 222 Q 2 282 31 333 L 0 448 L 118 417 Q 167 444 224 444 L 224 444 Q 286 443 336 414 Q 387 384 417 334 Q 447 284 448 222 Q 448 177 430 137 Q 413 97 381 65 L 381 65 Z M 224 407 Q 173 406 130 381 L 123 377 L 53 395 L 72 327 L 68 320 Q 40 275 39 222 Q 41 144 94 92 Q 146 39 224 38 Q 300 38 354 92 Q 409 146 411 222 Q 408 300 355 353 Q 302 405 224 407 L 224 407 Z M 325 269 Q 320 266 306 259 L 306 259 Q 292 253 287 251 Q 280 246 275 253 Q 271 258 266 265 Q 260 272 257 275 Q 253 281 245 276 Q 221 265 203 251 Q 185 237 170 210 Q 166 204 173 198 Q 178 194 186 180 Q 188 175 185 170 Q 184 169 181 160 Q 178 152 174 142 Q 170 134 168 129 Q 162 117 157 120 Q 156 120 156 120 Q 151 120 145 120 Q 139 119 130 126 Q 130 127 129 128 Q 124 132 118 143 Q 112 154 111 173 Q 112 193 121 210 Q 130 226 133 230 Q 133 230 134 230 Q 134 231 135 232 Q 140 241 165 268 Q 189 295 228 314 Q 254 325 268 328 Q 283 330 295 328 Q 304 326 316 319 Q 328 312 332 302 Q 339 280 336 275 Q 334 272 328 270 Q 326 269 325 269 L 325 269 Z" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--/* End Contact Section */-->