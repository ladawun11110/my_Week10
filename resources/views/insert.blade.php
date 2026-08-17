<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มบทความใหม่</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto px-4 py-8 max-w-2xl">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">เพิ่มบทความใหม่</h1>
            <a href="{{ route('blog') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 font-semibold transition">ย้อนกลับ</a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <form action="{{ route('insert') }}" method="POST">
                @csrf
                
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-medium mb-2">หัวข้อบทความ</label>
                    <input type="text" id="title" name="title" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="กรอกหัวข้อบทความของคุณ...">
                </div>
                <div class="mb-4">
                    <label for="content" class="block text-gray-700 font-medium mb-2">เนื้อหาบทความ</label>
                    <textarea id="content" name="content" rows="6" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="เขียนเนื้อหาบทความที่นี่..."></textarea>
                </div>
                <div class="mb-6">
                    <label for="status" class="block text-gray-700 font-medium mb-2">สถานะบทความ</label>
                    <select id="status" name="status"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="1">เผยแพร่</option>
                        <option value="0">ฉบับร่าง</option>
                    </select>
                </div>
                <div class="flex justify-end space-x-2">
                    <a href="/blog" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400 font-semibold transition">ยกเลิก</a>
                    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 font-semibold transition">บันทึกบทความ</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>