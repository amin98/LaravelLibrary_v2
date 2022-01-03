@extends('layouts.app')

@section('content')
        <div class="flex justify-center mt-2.5 gap-x-4 px-2">
            <ul class="inline-flex px-3 py-1 bg-gray-200 rounded-xl border overflow-y-hidden">
                @foreach($alphabetArray as $letter)
                    <form class="inline" action="{{ route('alphabetsearch', $letter) }}" method="get">
                        <li>
                            <button type="submit"
                                    class="transform transition focus:outline-none duration-150 hover:scale-150 text-xl text-black px-2">{{ $letter }}</button>
                        </li>
                    </form>
                @endforeach
            </ul>
            <button class="p-1 bg-gray-200 border transform transition focus:outline-none duration-75 hover:scale-110 rounded-xl" id="switch-button">
                <span id="btn-switch-images" class="inline" ><svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="23" height="23" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
<path d="M443 5100 c-119 -31 -180 -66 -268 -155 -90 -89 -124 -150 -156 -272 -18 -72 -19 -114 -19 -732 0 -731 1 -735 67 -869 71 -143 213 -255 378 -297 87 -22 1378 -22 1473 0 207 49 378 220 427 427 22 95 22 1386 0 1473 -42 166 -153 307 -297 378 -134 66 -138 67 -873 66 -614 0 -665 -1 -732 -19z m1394 -385 c59 -18 106 -65 122 -122 7 -25 11 -257 11 -661 0 -539 -2 -628 -15 -660 -21 -49 -52 -81 -100 -103 -38 -17 -79 -19 -665 -19 -406 0 -638 4 -663 11 -21 5 -53 24 -72 40 -65 57 -65 62 -65 730 0 399 4 615 11 650 14 66 69 123 131 137 25 6 300 10 649 11 513 1 613 -1 656 -14z"/>
<path d="M3210 5104 c-209 -44 -380 -213 -435 -429 -22 -87 -22 -1378 0 -1473 49 -207 220 -378 427 -427 95 -22 1386 -22 1473 0 81 21 190 76 246 124 63 55 134 161 167 251 l27 75 3 676 c3 761 3 762 -67 904 -52 104 -136 190 -240 244 -139 71 -139 71 -878 70 -523 0 -671 -3 -723 -15z m1371 -385 c70 -15 123 -68 138 -138 7 -35 11 -251 11 -650 0 -668 0 -673 -65 -730 -19 -16 -51 -35 -72 -40 -25 -7 -257 -11 -661 -11 -539 0 -628 2 -660 15 -49 21 -81 52 -103 100 -17 38 -19 79 -19 665 0 406 4 638 11 663 5 21 24 53 41 72 55 63 56 64 725 64 404 1 619 -3 654 -10z"/>
<path d="M440 2344 c-160 -42 -302 -154 -373 -294 -66 -132 -67 -139 -67 -871 0 -620 1 -660 20 -733 57 -223 223 -384 445 -431 102 -22 1337 -22 1439 0 215 45 386 212 441 430 22 87 22 1378 0 1473 -49 207 -220 378 -427 427 -92 22 -1396 21 -1478 -1z m1415 -393 c48 -22 79 -54 100 -103 13 -32 15 -121 15 -660 0 -404 -4 -636 -11 -661 -5 -21 -24 -53 -40 -72 -57 -65 -62 -65 -730 -65 -399 0 -615 4 -650 11 -70 15 -123 68 -138 138 -7 35 -11 251 -11 650 0 655 1 670 59 725 58 56 52 55 736 55 592 1 632 -1 670 -18z"/>
<path d="M3198 2344 c-204 -49 -375 -221 -423 -426 -22 -95 -22 -1386 0 -1473 21 -81 76 -190 124 -246 55 -63 161 -134 251 -167 l75 -27 675 -3 c744 -3 772 -1 892 58 77 39 93 50 161 117 39 39 71 84 98 138 70 142 70 143 67 904 l-3 676 -27 75 c-33 90 -104 196 -167 251 -56 48 -165 103 -246 124 -84 21 -1389 21 -1477 -1z m1395 -385 c21 -5 53 -24 72 -40 65 -57 65 -62 65 -730 0 -399 -4 -615 -11 -650 -15 -70 -68 -123 -138 -138 -35 -7 -251 -11 -650 -11 -668 0 -673 0 -730 65 -16 19 -35 51 -40 72 -7 25 -11 257 -11 661 0 539 2 628 15 660 21 49 52 81 100 103 38 17 79 19 665 19 406 0 638 -4 663 -11z"/>
</g>
</svg></span>
                <span id="btn-switch-table"  class="hidden" ><svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="24" height="24" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
<path d="M445 4899 c-76 -11 -205 -73 -267 -128 -58 -51 -115 -136 -148 -221 l-25 -65 0 -1925 0 -1925 25 -65 c33 -85 90 -170 148 -221 72 -63 192 -117 287 -130 53 -6 771 -9 2150 -7 l2070 3 65 23 c81 30 188 100 235 155 46 53 87 127 111 197 18 53 19 125 19 1970 0 1845 -1 1917 -19 1970 -57 170 -177 290 -348 352 l-63 23 -2090 1 c-1164 1 -2117 -2 -2150 -7z m4259 -230 c70 -26 139 -92 174 -167 l27 -57 3 -407 3 -408 -2351 0 -2351 0 3 408 c3 366 5 411 21 447 42 94 108 158 195 190 31 11 382 14 2129 14 2089 1 2092 1 2147 -20z m-3424 -1684 l0 -425 -535 0 -535 0 0 425 0 425 535 0 535 0 0 -425z m1170 0 l0 -425 -480 0 -480 0 0 425 0 425 480 0 480 0 0 -425z m1180 0 l0 -425 -480 0 -480 0 0 425 0 425 480 0 480 0 0 -425z m1280 0 l0 -425 -535 0 -535 0 0 425 0 425 535 0 535 0 0 -425z m-3630 -1065 l0 -430 -532 2 -533 3 -3 415 c-1 228 0 421 3 427 3 10 120 13 535 13 l530 0 0 -430z m1170 0 l0 -430 -477 2 -478 3 -3 415 c-1 228 0 421 3 427 3 10 109 13 480 13 l475 0 0 -430z m1175 0 l0 -425 -477 -3 -478 -2 0 430 0 430 478 -2 477 -3 0 -425z m1280 0 l0 -425 -532 -3 -533 -2 0 430 0 430 533 -2 532 -3 0 -425z m-3625 -1065 l0 -426 -417 3 -418 3 -49 24 c-66 33 -122 91 -155 160 l-26 56 -3 303 -3 302 535 0 536 0 0 -425z m1170 0 l0 -425 -480 0 -480 0 0 425 0 425 480 0 480 0 0 -425z m1180 0 l0 -425 -480 0 -480 0 0 425 0 425 480 0 480 0 0 -425z m1278 123 l-3 -303 -26 -56 c-33 -69 -89 -127 -155 -160 l-49 -24 -417 -3 -418 -3 0 426 0 425 536 0 536 0 -4 -302z"/>
</g>
</svg></span>
            </button>
        </div>
        @if(auth()->user()->isAdmin())
        <div id="table-view" class="hidden md:px-10 lg:px-24 xl:px-24 2xl:px-24md:flex lg:flex xl:flex 2xl:flex justify-center py-5">
            <div class="w-full shadow overflow-hidden rounded border-b border-gray-200">
                <table class="min-w-full bg-white">
                    <thead class="bg-blue-900 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-3 uppercase font-semibold text-sm">Book Title</th>
                        <th class="w-1/3 text-left py-3 px-3 uppercase font-semibold text-sm">Author</th>
                        <th class="text-left py-3 px-3 uppercase font-semibold text-sm">Genre</th>
                        <th class="text-left py-3 px-3 uppercase font-semibold text-sm">View</th>
                        <th class="text-left py-3 px-3 uppercase font-semibold text-sm">Edit</th>
                        <th class="text-left py-3 px-3 uppercase font-semibold text-sm">Delete</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-700">
                    @forelse($books as $book)
                        <tr>
                            <td class="w-1/3 text-left py-3 px-3">{{ $book->title }}</td>
                            <td class="w-1/3 text-left py-3 px-3">{{ $book->author->name }}</td>
                            <td class="text-left py-3 px-3">{{ $book->genre->title }}</td>
                            <div class="w-2/3">
                                <td class="text-left py-3 px-3"><a href="{{ route('book.show', ['id' => $book->id] )}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.209 0-4 1.792-4 4 0 2.209 1.791 4 4 4s4-1.791 4-4c0-2.208-1.791-4-4-4z"/>
                                        </svg>
                                    </a></td>
                                <td class="text-left py-3 px-3"><a href="{{ route('admin.book.edit', $book->id )}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                             width="20" height="20"
                                             viewBox="0 0 40 40"
                                             style=" fill:#000000;">
                                            <path fill="#f5ce85"
                                                  d="M5.982 29.309L8.571 26.719 13.618 31.115 10.715 34.019 2.453 37.547z"></path>
                                            <path fill="#967a44"
                                                  d="M8.595,27.403l4.291,3.737l-2.457,2.457l-7.026,3.001l3.001-7.003L8.595,27.403 M8.548,26.036 l-2.988,2.988l-4.059,9.474L11,34.44l3.351-3.351L8.548,26.036L8.548,26.036z"></path>
                                            <path fill="#36404d" d="M3.805 33.13L1.504 38.5 6.888 36.201z"></path>
                                            <path fill="#f78f8f"
                                                  d="M30.062,5.215L32.3,2.978C32.931,2.347,33.769,2,34.66,2s1.729,0.347,2.36,0.978 c1.302,1.302,1.302,3.419,0,4.721l-2.237,2.237L30.062,5.215z"></path>
                                            <path fill="#c74343"
                                                  d="M34.66,2.5c0.758,0,1.471,0.295,2.007,0.831c1.107,1.107,1.107,2.907,0,4.014l-1.884,1.884 L30.77,5.215l1.884-1.884C33.189,2.795,33.902,2.5,34.66,2.5 M34.66,1.5c-0.982,0-1.965,0.375-2.714,1.124l-2.591,2.591 l5.428,5.428l2.591-2.591c1.499-1.499,1.499-3.929,0-5.428v0C36.625,1.875,35.643,1.5,34.66,1.5L34.66,1.5z"></path>
                                            <g>
                                                <path fill="#ffeea3"
                                                      d="M11.346,33.388c-0.066-0.153-0.157-0.308-0.282-0.454c-0.31-0.363-0.749-0.584-1.31-0.661 c-0.2-1.267-1.206-1.803-1.989-1.964c-0.132-0.864-0.649-1.342-1.201-1.582l21.49-21.503l4.721,4.721L11.346,33.388z"></path>
                                                <path fill="#ba9b48"
                                                      d="M28.054,7.931l4.014,4.014L11.431,32.594c-0.242-0.278-0.638-0.59-1.261-0.748 c-0.306-1.078-1.155-1.685-1.983-1.943c-0.151-0.546-0.447-0.968-0.821-1.272L28.054,7.931 M28.053,6.517L5.56,29.023 c0,0,0.007,0,0.021,0c0.197,0,1.715,0.054,1.715,1.731c0,0,1.993,0.062,1.993,1.99c1.982,0,1.71,1.697,1.71,1.697l22.482-22.495 L28.053,6.517L28.053,6.517z"></path>
                                            </g>
                                            <g>
                                                <path fill="#d9e7f5" d="M29.107 4.764H34.685V11.440999999999999H29.107z"
                                                      transform="rotate(-45.009 31.895 8.103)"></path>
                                                <path fill="#788b9c"
                                                      d="M31.507,4.477l4.014,4.014l-3.237,3.237L28.27,7.714L31.507,4.477 M31.507,3.063l-4.651,4.651 l5.428,5.428l4.651-4.651L31.507,3.063L31.507,3.063z"></path>
                                            </g>
                                        </svg>
                                    </a></td>
                                <td class="text-left py-3 pl-6"><a href="{{ route('admin.book.destroy', $book->id )}}"
                                                                   onclick="return confirm('Are you sure you want to delete {{ $book->title }} from {{ $book->author->name }}?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                             width="25" height="25"
                                             viewBox="0 0 100 100"
                                             style=" fill:#000000;">
                                            <path fill="#f37e98"
                                                  d="M25,30l3.645,47.383C28.845,79.988,31.017,82,33.63,82h32.74c2.613,0,4.785-2.012,4.985-4.617L75,30"></path>
                                            <path fill="#f15b6c"
                                                  d="M65 38v35c0 1.65-1.35 3-3 3s-3-1.35-3-3V38c0-1.65 1.35-3 3-3S65 36.35 65 38zM53 38v35c0 1.65-1.35 3-3 3s-3-1.35-3-3V38c0-1.65 1.35-3 3-3S53 36.35 53 38zM41 38v35c0 1.65-1.35 3-3 3s-3-1.35-3-3V38c0-1.65 1.35-3 3-3S41 36.35 41 38zM77 24h-4l-1.835-3.058C70.442 19.737 69.14 19 67.735 19h-35.47c-1.405 0-2.707.737-3.43 1.942L27 24h-4c-1.657 0-3 1.343-3 3s1.343 3 3 3h54c1.657 0 3-1.343 3-3S78.657 24 77 24z"></path>
                                            <path fill="#1f212b"
                                                  d="M66.37 83H33.63c-3.116 0-5.744-2.434-5.982-5.54l-3.645-47.383 1.994-.154 3.645 47.384C29.801 79.378 31.553 81 33.63 81H66.37c2.077 0 3.829-1.622 3.988-3.692l3.645-47.385 1.994.154-3.645 47.384C72.113 80.566 69.485 83 66.37 83zM56 20c-.552 0-1-.447-1-1v-3c0-.552-.449-1-1-1h-8c-.551 0-1 .448-1 1v3c0 .553-.448 1-1 1s-1-.447-1-1v-3c0-1.654 1.346-3 3-3h8c1.654 0 3 1.346 3 3v3C57 19.553 56.552 20 56 20z"></path>
                                            <path fill="#1f212b"
                                                  d="M77,31H23c-2.206,0-4-1.794-4-4s1.794-4,4-4h3.434l1.543-2.572C28.875,18.931,30.518,18,32.265,18h35.471c1.747,0,3.389,0.931,4.287,2.428L73.566,23H77c2.206,0,4,1.794,4,4S79.206,31,77,31z M23,25c-1.103,0-2,0.897-2,2s0.897,2,2,2h54c1.103,0,2-0.897,2-2s-0.897-2-2-2h-4c-0.351,0-0.677-0.185-0.857-0.485l-1.835-3.058C69.769,20.559,68.783,20,67.735,20H32.265c-1.048,0-2.033,0.559-2.572,1.457l-1.835,3.058C27.677,24.815,27.351,25,27,25H23z"></path>
                                            <path fill="#1f212b"
                                                  d="M61.5 25h-36c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h36c.276 0 .5.224.5.5S61.776 25 61.5 25zM73.5 25h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5S73.776 25 73.5 25zM66.5 25h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.276 0 .5.224.5.5S66.776 25 66.5 25zM50 76c-1.654 0-3-1.346-3-3V38c0-1.654 1.346-3 3-3s3 1.346 3 3v25.5c0 .276-.224.5-.5.5S52 63.776 52 63.5V38c0-1.103-.897-2-2-2s-2 .897-2 2v35c0 1.103.897 2 2 2s2-.897 2-2v-3.5c0-.276.224-.5.5-.5s.5.224.5.5V73C53 74.654 51.654 76 50 76zM62 76c-1.654 0-3-1.346-3-3V47.5c0-.276.224-.5.5-.5s.5.224.5.5V73c0 1.103.897 2 2 2s2-.897 2-2V38c0-1.103-.897-2-2-2s-2 .897-2 2v1.5c0 .276-.224.5-.5.5S59 39.776 59 39.5V38c0-1.654 1.346-3 3-3s3 1.346 3 3v35C65 74.654 63.654 76 62 76z"></path>
                                            <path fill="#1f212b"
                                                  d="M59.5 45c-.276 0-.5-.224-.5-.5v-2c0-.276.224-.5.5-.5s.5.224.5.5v2C60 44.776 59.776 45 59.5 45zM38 76c-1.654 0-3-1.346-3-3V38c0-1.654 1.346-3 3-3s3 1.346 3 3v35C41 74.654 39.654 76 38 76zM38 36c-1.103 0-2 .897-2 2v35c0 1.103.897 2 2 2s2-.897 2-2V38C40 36.897 39.103 36 38 36z"></path>
                                        </svg>
                                    </a></td>
                            </div>
                        </tr>
                    @empty
                        <tr>
                            <td>
                                <p>Nothing to show...</p>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @else
            <div id="table-view" class="hidden md:px-10 lg:px-24 xl:px-24 2xl:px-24 md:flex lg:flex xl:flex 2xl:flex justify-center py-5">
                <div class="w-full shadow overflow-hidden rounded border-b border-gray-200">
                    <table class="min-w-full bg-white">
                        <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-3 uppercase font-semibold text-sm">Book Title</th>
                            <th class="w-1/3 text-left py-3 px-3 uppercase font-semibold text-sm">Author</th>
                            <th class="text-left py-3 px-3 uppercase font-semibold text-sm">Genre</th>
                            <th class="text-left py-3 px-3 uppercase font-semibold text-sm">View</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-700">
                        @forelse($books as $book)
                            <tr>
                                <td class="w-1/3 text-left py-3 px-3">{{ $book->title }}</td>
                                <td class="w-1/3 text-left py-3 px-3">{{ $book->author->name }}</td>
                                <td class="text-left py-3 px-3">{{ $book->genre->title }}</td>
                                <div class="w-2/3">
                                    <td class="text-left py-3 px-3"><a href="{{ route('book.show', ['id' => $book->id] )}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path
                                                    d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.209 0-4 1.792-4 4 0 2.209 1.791 4 4 4s4-1.791 4-4c0-2.208-1.791-4-4-4z"/>
                                            </svg>
                                        </a></td>
                                </div>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    <p>Nothing to show...</p>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            @endif

    <div id="image-view" class="hidden grid-cols-2 justify-items-center gap-3 py-12 p-2">
        @forelse($books as $book)
            <div class="">
                <div class="grid justify-items-center sm:w-32 md:w-52 lg:w-52">
                    <a href="{{ route('book.show', ['id' => $book->id]) }}">
                        <img id="book-cover-image" class="flex flex-shrink-0 transition duration-150 ease-in-out transform hover:scale-110
                        rounded-md shadow-lg h-48 w-32 xxs:h-52 xxs:w-32 md:h-60 md:w-40 lg:h-60 lg:w-40 xl:h-72 xl:w-48 2xl:h-80 2xl:w-56 mb-3" src="{{ secure_asset($book->image()) }}" alt="{{ $book->title }}">
                    </a>
                    <span class="mx-2 mb-5 sm:mx-6 md:px-6 lg:px-6 xl:px-5 2xl:px-5 md:text-lg lg:text-xl xl:text-xl 2xl:text-xl"><h1>{{ $book->title }}</h1></span>
                </div>
            </div>
        @empty
            <div>
                <h1>There was nothing to find...</h1>
            </div>
        @endforelse
    </div>
@endsection
