<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hyra Wira NFT Campaign</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Rubik&family=Nunito:wght@700&display=swap" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            rubik: ['Rubik', 'sans-serif'],
            nunito: ['Nunito', 'sans-serif'],
          },
        },
      },
    };
  </script>
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }

    .nft-thumb {
      width: 114px;
      height: 94px;
      border: 0.72px solid black;
      border-radius: 9px;
      background: #FCF6F1;
      box-shadow: 2.86px 2.86px 0px 0px #000000;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .nft-img {
      width: 86px;
      height: 86px;
      object-fit: contain;
    }
  </style>
</head>

<body class="flex flex-col items-center min-h-screen">
<!-- Wrapper -->
<div class="w-full">

    <!-- Header -->
    <header class="flex justify-between items-center h-[68px] px-6 md:px-[120px] py-4">
        <div class="flex items-center gap-10">
            <img src="/image/Menu.svg" alt="Menu Icon" class="h-8" />
            <nav class="hidden md:flex gap-6">
                <a href="#" class="text-sm font-bold text-gray-700 hover:text-pink-500">Task</a>
                <a href="#" class="text-sm font-bold text-gray-700 hover:text-pink-500">Mint Info</a>
                <a href="#" class="text-sm font-bold text-gray-700 hover:text-pink-500">Benefits</a>
                <a href="#" class="text-sm font-bold text-gray-700 hover:text-pink-500">Partners</a>
            </nav>
        </div>
        <div class="flex items-center gap-3">
            <button class="flex items-center gap-2 px-4 py-2 rounded-xl border border-black shadow-[2px_2px_0px_0px_#000] bg-gradient-to-r from-pink-600 via-pink-300 to-white">
                <img src="/image/Vector2.svg" alt="Wallet Icon" class="w-5 h-4" />
                <span class="text-sm font-semibold text-black">Connect Wallet</span>
            </button>
            <button class="w-[50px] h-[44px] rounded-xl border border-black bg-white shadow-[2px_2px_0px_0px_#000] flex items-center justify-center">
                <img src="/image/Vector.svg" alt="Settings" class="w-[22px] h-[22px]" />
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex flex-col md:flex-row justify-center items-start gap-10 mt-10 px-6 md:px-[120px]">
        <!-- NFT Card -->
        <div class="flex flex-col items-center gap-4 w-full md:w-[365px]">
            <div class="w-full h-[344px] border border-black rounded-xl shadow-[4px_4px_0px_0px_#000000] bg-[#FCF6F1] overflow-hidden">
                <img src="/image/b41e499afb1f1a40f2ca284716f22d534646f76d.gif" alt="NFT Main" class="w-full h-full object-cover" />
            </div>
            <div class="flex gap-3">
                <div class="nft-thumb"><img src="/image/hinh2.svg" alt="NFT 1" class="nft-img" /></div>
                <div class="nft-thumb"><img src="/image/hinh1.svg" alt="NFT 2" class="nft-img" /></div>
                <div class="nft-thumb"><img src="/image/hinh3.svg" alt="NFT 3" class="nft-img" /></div>
            </div>
        </div>

        <!-- Info Box -->
        <div class="flex flex-col items-center w-full md:w-[400px]">
            <!-- Title -->
            <div class="text-center mb-6">
                <h2 class="font-rubik text-3xl font-bold mb-2">Hyra Wira NFT Campaign</h2>
                <p class="text-[14px] leading-[20px] font-normal w-[381px]">
                    The first NFT mint campaign marks your journey to 'Be Hyrasapiens' - join the pioneers of decentralized AI!
                </p>
            </div>

            <!-- Mint Info -->
            <div class="w-full max-w-sm p-4 rounded-[24px] border border-black shadow-[4px_4px_0px_0px_#000000] bg-white space-y-4">
                <div class="bg-[#FAE2F1] p-4 rounded-[16px] border border-black space-y-4">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-2 px-3 py-1 border border-black rounded-xl shadow-[2px_2px_0px_0px_#000] bg-gradient-to-r from-yellow-400 to-white">
                            <div class="w-4 h-4 bg-[#00C896] border-4 border-white rounded-full shadow-inner"></div>
                            <span class="text-xs font-extrabold uppercase">Coming Soon</span>
                        </div>
                        <p class="text-sm font-semibold">Mint Date: 10/05/2025</p>
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold">Total Minted</p>
                            <p class="text-sm font-bold text-black">12.60% <span class="text-gray-400 font-normal">(603/5000)</span></p>
                        </div>
                        <div class="w-full h-[10px] bg-white border border-black rounded-full overflow-hidden">
                            <div class="h-full bg-[#EC008C]" style="width: 12.6%;"></div>
                        </div>
                    </div>

                    <div class="pt-1">
                        <div class="flex justify-between items-center border border-black bg-white rounded-xl p-2">
                            <div class="flex items-center gap-2 font-semibold text-sm">
                                <img src="/image/vi.svg" alt="Eligible" class="w-5 h-5" />
                                <span>Eligible to Mint</span>
                            </div>
                            <div class="w-10 h-8 flex items-center justify-center border border-black rounded-md shadow-[2px_2px_0px_0px_#000] font-bold">01</div>
                        </div>
                    </div>

                    <div class="pt-1">
                        <div class="flex justify-between items-center border border-black bg-white rounded-xl p-2">
                            <div class="flex items-center gap-2 font-semibold text-sm">
                                <img src="/image/dongHo.svg" alt="Timer" class="w-5 h-5" />
                                <span>Start In</span>
                            </div>
                            <div class="px-3 py-1 border border-black rounded-md shadow-[2px_2px_0px_0px_#000] font-bold text-sm">
                                12d : 08h : 42m : 16s
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-center gap-4 mt-4">
                <button class="flex items-center gap-2 px-4 py-2 w-[122px] h-[44px] rounded-xl border border-black shadow-[2px_2px_0px_0px_#000] bg-gradient-to-r from-[#2DDDFF] to-white">
                    <img src="/image/anh.svg" alt="My NFTs" class="w-5 h-5" />
                    <span class="font-nunito font-semibold text-black text-sm">My NFTs</span>
                </button>

                <button disabled class="w-[250px] h-[44px] flex items-center justify-center gap-2 px-4 py-2 rounded-xl border border-black bg-white shadow-[2px_2px_0px_0px_#000] opacity-50 cursor-not-allowed">
                    <img src="/image/khoa.svg" alt="Lock" class="w-5 h-5" />
                    <span class="font-nunito font-semibold text-gray-500">Mint Coming Soon</span>
                </button>
            </div>
        </div>
    </main>

    <!-- Decorative Background (after content) -->
    <div class="w-[440px] h-[70px] bg-red-200 rounded-b-full bg-[#F3ECF0]"></div>

</div>
</body>

</html>
