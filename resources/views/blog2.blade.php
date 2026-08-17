<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าบล็อกของฉัน</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">ยินดีต้อนรับสู่หน้าบล็อก (Blog)</h1>

        <!-- วนลูปแสดงรายการบล็อก -->
        <div class="space-y-4">
            @foreach ($blogs as $item)
                <div class="bg-white p-6 rounded-lg shadow-md flex justify-between items-center">
                    <div>
                        <!-- หัวข้อบล็อก -->
                        <h2 class="text-xl font-semibold text-gray-800">{{ $item->title }}</h2>
                        <!-- เนื้อหา (จำกัดความยาว) -->
                        <p class="text-gray-600 mt-1">{{ Str::limit($item->content, 50) }}</p>
                    </div>

                    <div>
                        <!-- สถานะ (ปรับใช้ Tailwind แทน Bootstrap) -->
                        @if($item->status)
                            <span class="px-3 py-1 text-sm text-green-700 bg-green-100 rounded-full font-medium">เผยแพร่</span>
                        @else
                            <span class="px-3 py-1 text-sm text-red-700 bg-red-100 rounded-full font-medium">ฉบับร่าง</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>