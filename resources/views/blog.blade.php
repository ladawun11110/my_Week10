<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าบล็อกของฉัน</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">บทความทั้งหมด</h1>
            <a href="insert" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 font-semibold">+ เพิ่มบทความ</a>
        </div>
        
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 text-left">
                        <th class="py-3 px-4">บทความ</th>
                        <th class="py-3 px-4 text-center">สถานะ</th>
                        <th class="py-3 px-4 text-center">ลบบทความ</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($blogs as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 text-gray-800 font-medium">{{ $item->title }}</td>
                            <td class="py-3 px-4 text-center">
                                @if ($item->status)
                                    <span class="px-3 py-1 text-xs text-green-700 bg-green-100 rounded-full font-medium">เผยแพร่</span>
                                @else
                                    <span class="px-3 py-1 text-xs text-red-700 bg-red-100 rounded-full font-medium">ฉบับร่าง</span>
                                @endif
                            </td>
                            <td class="py-3 px-4 text-center">
                                <a href="{{ route('delete', $item->id) }}"
                                   class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm transition"
                                   onclick="return confirm('คุณต้องการลบบทความนี้จริงหรือไม่?')">ลบ</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>