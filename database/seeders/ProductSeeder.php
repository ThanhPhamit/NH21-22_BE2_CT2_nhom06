<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([[
            'name' => "MSI Gaming GF63",
            'type_id' => 3,
            'description' => "Sở hữu một vẻ ngoài độc đáo, mạnh mẽ phù hợp với mọi game thủ, chiếc laptop MSI Gaming GF63 Thin 11UD i7 11800H (648VN) được trang bị dòng chip Intel thế hệ 11 hiệu năng mạnh mẽ vượt trội khi đi cùng card màn hình rời RTX 3050 Ti Max-Q sẵn sàng chiến mượt bất kì tựa game phổ biến hay thiết kế đồ họa chuyên sâu.",
            'image' => "msi-gaming-gf63-thin-11ud-i7-648vn-3.jpg",
            'price' => 2799,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => true,
            'expire_period' => 1,
        ],
        [
            'name' => "Acer Nitro 5",
            'type_id' => 3,
            'description' => "Laptop Acer Nitro 5 Gaming AN515 57 5831 i5 (NH.QDGSV.003) là thế hệ laptop gaming mới của nhà Acer có nhiều thay đổi trong thiết kế. Hiệu năng vẫn giữ vững phong độ, tự tin mang đến cho game thủ trải nghiệm chơi game cực đã. ",
            'image' => "acer-nitro-5-gaming-an515-57-5831-i5-nhqdgsv003-270721-1044374.jpg",
            'price' => 2639,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => true,
            'expire_period' => 1,
        ],
        [
            'name' => "Dell Gaming Alienware",
            'type_id' => 3,
            'description' => "Laptop Dell Gaming Alienware m15 R6 i7 11800H (P109F001DBL) sở hữu thiết kế độc đáo đậm chất gaming cùng cấu hình vượt trội sẵn sàng đáp ứng hoàn hảo mọi tác vụ từ đồ họa - kỹ thuật tới những trận chiến game đầy kịch tính.",
            'image' => "dell-gaming-alienware-m15-r6-i7-p109f001dbl-2-1.jpg",
            'price' => 6199,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => true,
            'expire_period' => 1,
        ],
        [
            'name' => "Lenovo Gaming Legion 5",
            'type_id' => 3,
            'description' => "Sở hữu vẻ ngoài cá tính cùng hiệu năng vượt trội, laptop Lenovo Gaming Legion 5 15ITH6 i7 11800H (82JK00FNVN) sẵn sàng đáp ứng mọi nhu cầu của người dùng từ văn phòng, game giải trí đến đồ hoạ - kỹ thuật chuyên sâu.",
            'image' => "vi-vn-lenovo-gaming-legion-5-15ith6-i7-82jk00fnvn-2.jpg",
            'price' => 3899,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => true,
            'expire_period' => 1,
        ],
        [
            'name' => "Asus TUF Gaming",
            'type_id' => 3,
            'description' => "Mặc dù sở hữu kiểu dáng đơn giản nhưng chiếc Asus TUF Gaming FX516PM i7 11370H (HN002W) này lại mang một cấu hình vượt trội nhờ sở hữu chip thế hệ 11 cùng card đồ hoạ rời, đánh bật mọi đối thủ.",
            'image' => "vi-vn-asus-tuf-gaming-fx516pm-i7-hn002w-5.jpg",
            'price' => 3299,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => true,
            'expire_period' => 1,
        ],
        [
            'name' => "Apple MacBook Pro M1",
            'type_id' => 3,
            'description' => "Apple Macbook Pro M1 2020 được nâng cấp với bộ vi xử lý mới cực kỳ mạnh mẽ, chiếc laptop này sẽ phục vụ tốt cho công việc của bạn, đặc biệt cho lĩnh vực đồ họa, kỹ thuật.",
            'image' => "apple-macbook-pro-2020-z11c-061220-1119080.jpg",
            'price' => 4199,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => false,
            'expire_period' => 1,
        ],
        [
            'name' => "Acer Predator Triton 300 PT315",
            'type_id' => 3,
            'description' => "Trải nghiệm chơi game cực mượt mà trên chiếc laptop Acer Predator Triton 300 PT315 53 71DJ i7 (NH.QDSSV.001) mang trong mình bộ xử lý Intel thế hệ 11 mạnh mẽ cân được nhiều tựa game hot.",
            'image' => "vi-vn-acer-predator-triton-300-pt315-53-71dj-i7-4.jpg",
            'price' => 4089,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => false,
            'expire_period' => 1,
        ],
        [
            'name' => "MSI Gaming Leopard GP76",
            'type_id' => 3,
            'description' => "Laptop MSI GP76 11UG i7 (435VN) thiết kế cực ngầu, cấu hình cực mạnh với bộ vi xử lý Gen 11 từ nhà Intel, không những thoả sức trở thành game thủ trên mọi tựa game mà còn có thể đáp ứng các tác vụ đồ hoạ, kỹ thuật chuyên nghiệp.",
            'image' => "vi-vn-msi-gp76-11ug-i7-435vn.jpg",
            'price' => 4934,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => false,
            'expire_period' => 1,
        ],
        [
            'name' => "MSI Gaming GS66 Stealth",
            'type_id' => 3,
            'description' => "Xứng danh tay chơi cự phách nơi đô thị sầm uất, laptop MSI Gaming GS66 Stealth 11UG i7 11800H (219VN) với vẻ ngoài đầy mạnh mẽ cùng sức mạnh tuyệt hảo, phát huy hiệu suất tối ưu và khả năng chiến game cực đã cùng đồng đội.",
            'image' => "vi-vn-msi-gaming-gs66-stealth-11ug-i7-219vn-1.jpg",
            'price' => 6074,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => false,
            'expire_period' => 1,
        ],
        [
            'name' => "Gigabyte Gaming G5",
            'type_id' => 3,
            'description' => "Gigabyte Gaming G5 (KC-5S11130SB) luôn sẵn sàng tác chiến cùng bạn trên mọi chiến trường ảo với sức mạnh hiệu năng bộc phá cùng lối thiết kế hiện đại, đậm tính thời trang, hứa hẹn mang đến những trải nghiệm giải trí hoàn hảo.",
            'image' => "vi-vn-gigabyte-gaming-g5-i5-kc5s11130sb-1.jpg",
            'price' => 2699,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => false,
            'expire_period' => 1,
        ],
        [
            'name' => "Camera IP 360 Độ 1536P TP-Link Tapo C210 Trắng",
            'type_id' => 1,
            'description' => "TP-Link Tapo C210 quay bao quát toàn bộ không gian, không những giúp bạn thu thập dữ liệu giá trị tối ưu mà còn tiết kiệm chi phí khi không cần phải mua nhiều camera giám sát cho 1 khu vực nhất định.",
            'image' => "camera-ip-360-do-3mp-tp-link-tapo-c210-2-1-org.jpg",
            'price' => 899,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => true,
            'expire_period' => 1,
        ],
        [
            'name' => "Camera IP 1080P Imou Cue 2E-D Trắng",
            'type_id' => 1,
            'description' => "Camera IP 1080P Imou Cue 2E-D được hỗ trợ điều chỉnh góc quay thủ công với chốt chân đế xoay linh hoạt, góc xoay ngang 89°, dọc 46°, góc nhìn chéo đến 108° có thể lựa chọn góc ghi hình để bao quát tốt không gian cần giám sát, thích hợp sử dụng trong nhà.",
            'image' => "camera-ip-1080p-imou-cue-2e-d-trang-1.jpg",
            'price' => 714,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => true,
            'expire_period' => 1,
        ],
        [
            'name' => "Camera IP Ngoài Trời 2MP Imou Bullet 2E-D Trắng",
            'type_id' => 1,
            'description' => "Nhỏ gọn, hiện đại, sử dụng phù hợp cả ngoài trời nhờ chuẩn chống bụi, chống nước IP67. Tiêu cự tốt, góc xoay chéo 120°, góc dọc 54°, xoay ngang 102° quan sát bao quát không gian.",
            'image' => "camera-ip-ngoai-troi-2mp-imou-bullet-2e-d-trang-9.jpg",
            'price' => 1253,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => true,
            'expire_period' => 1,
        ],
        [
            'name' => "Camera Hành Trình 1080P Vietmap C63 Đen",
            'type_id' => 1,
            'description' => "Camera được trang bị hai ống kính có thể ghi hình cùng lúc trước và trong xe. Thiết bị đồng thời hỗ trợ ghi hình với thông tin GPS giúp lưu trữ hình ảnh với thông tin tốc độ, tọa độ.",
            'image' => "camera-hanh-trinh-vietmap-c63-den-2-org.jpg",
            'price' => 2944,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => true,
            'expire_period' => 1,
        ],
        [
            'name' => "Camera IP 1080P Ezviz CS-C1HC",
            'type_id' => 1,
            'description' => "Camera IP 1080P Ezviz CS-C1HC (D0-1D2WFR) trắng có thiết kế nhỏ gọn, phù hợp đặt ở nhiều không gian khác nhau trong căn phòng của bạn mà không làm mất tính thẩm mỹ của căn phòng. Có thể đặt để bàn hoặc treo tường chắc chắn nhờ có 2 miếng keo dán tặng kèm sản phẩm.",
            'image' => "camera-ip-1080p-ezviz-cs-c1hc-d0-1d2wfr-trang-2-1-org.jpg",
            'price' => 553,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => true,
            'expire_period' => 1,
        ],
        [
            'name' => "Loa Bluetooth JBL Charge 5",
            'type_id' => 2,
            'description' => "Được gia cố kỳ công cho kết cấu gọn gàng, loa JBL có khả năng chịu va đập tốt, dịch chuyển dễ dàng nhờ trọng lượng chỉ 0.96 kg, bố trí vững vàng trên bàn, kệ, bãi cát, tảng đá ở nơi cắm trại với thiết kế chân đế có độ bám tối ưu. ",
            'image' => "bluetooth-jbl-charge-5-1-org.jpg",
            'price' => 399,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => false,
            'expire_period' => 1,
        ],
        [
            'name' => "Loa Bluetooth Sony SRS-XB13",
            'type_id' => 2,
            'description' => "Thiết kế loa Bluetooth Sony đơn giản, gọn nhẹ chỉ 0.4 kg, đi kèm dây treo cho bạn dễ dàng đeo vào cổ tay của mình hoặc treo móc vào balo mang theo khi đi chơi, du lịch, đi học,... Chất liệu vỏ nhựa có thêm lớp UV coating cho độ bền cao, chống trầy xước, làm sạch nhẹ nhàng.",
            'image' => "bluetooth-sony-srs-xb13-1-1-org.jpg",
            'price' => 116,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => false,
            'expire_period' => 1,
        ],
        [
            'name' => "Loa vi tính Microlab B26",
            'type_id' => 2,
            'description' => "Loa vi tính Microlab B26 có 2 chiếc loa nhỏ trọng lượng chỉ 0.5 kg, chất liệu nhựa tốt, màu đen trơn bóng đẹp, rất tiện lợi khi mang đi và đặt ở bất kỳ nơi nào bạn muốn. Sản phẩm vận hành liên tục nhờ nguồn điện trực tiếp, không lo hết pin trong quá trình sử dụng.",
            'image' => "vi-tinh-microlab-b26-den-2-1.jpg",
            'price' => 274,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => false,
            'expire_period' => 1,
        ],
        [
            'name' => "Loa Bluetooth Mozard S21",
            'type_id' => 2,
            'description' => "Màng loa căng mịn chắc chắn, lớp vỏ bọc cao su giữ loa chống trầy và chống trượt khi đặt trên các mặt phẳng trơn bóng. Với trọng lượng chỉ 275 g, thật nhẹ nhàng để bảo quản và mang theo sử dụng loa mọi lúc, mọi nơi.",
            'image' => "bluetooth-mozard-s21-xanh-1.jpg",
            'price' => 399,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => false,
            'expire_period' => 1,
        ],
        [
            'name' => "Loa Bluetooth JBL Partybox 100 Đen",
            'type_id' => 2,
            'description' => "Loa Bluetooth JBL Partybox 100 màu đen với thiết kế hình trụ khá mềm mại, vát cạnh tinh tế, tạo nét sang trọng cho tổng thể sản phẩm và không gian sử dụng.",
            'image' => "bluetooth-jbl-partybox-100-den-2-1.jpg",
            'price' => 95,
            'discount_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'feature' => false,
            'expire_period' => 1,
        ]],
    );
        
        //
    }
}
