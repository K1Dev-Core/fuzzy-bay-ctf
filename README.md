# Fuzzy Bay — CTF Challenge (TCTT 2026 style)

เว็บไซต์ให้ดาวน์โหลด (torrent tracker) จำลองชื่อ **Naomi Bay** ที่ถูกปิดเข้าโหมด Maintenance —

Jitlada ถูกเพื่อนชวนให้มาดาวน์โหลด `claude_max.exe` จาก Naomi Bay ทะเลใต้ดินในตำนาน ทั้งสนุกทั้งอันตราย แต่เมื่อเธอมาถึง ทั้งเว็บถูกปิดอยู่ในหน้า "Under Construction" ไม่มี uploads ไม่มี downloads ไม่มี menus ทุกอย่างถูกปิดหมดแล้ว... แต่ Jitlada ไม่ใช่คนที่ยอมแพ้แค่เพราะเว็บบอกว่า "กำลังปรับปรุง" เธอรู้เสมอว่า **มีอะไรบางอย่างถูกทิ้งไว้ข้างหลังเสมอ**

- **หมวด:** Web Application
- **ระดับความยาก:** Medium
- **Flag format:** `TCTT2026{...}`
- **ช่องโหว่ที่ซ่อนอยู่:** Reflected XSS, Hidden Directory Exposure, Directory Listing, Sensitive Backup File Exposure

## วิธีรัน

```bash
docker compose up -d --build
```

แล้วเปิด `http://localhost:8080`

เปลี่ยน Flag ได้ตามต้องการ (ค่าเริ่มต้นเป็น Flag เดียวกับโจทย์จริง):

```bash
FLAG="TCTT2026{ธาตุอาหาร_ของ_ฉัน}" docker compose up -d --build
# หรือแก้ในไฟล์ docker-compose.yml / Dockerfile
```

**โจทย์นี้สร้างเพื่อการเล่น/ฝึกแบบส่วนตัวเท่านั้น**

<details>
<summary>วิธีแก้ (Spoiler)</summary>

1. หน้า Maintenance มีจุดให้ใช้ได้จุดเดียวคือฟอร์ม **Subscribe**
2. กรอก email อะไรก็ได้ → input สะท้อนกลับโดยไม่ sanitize → **Reflected XSS** (Rabbit Hole ไม่มี admin bot/flag)
3. Enum directory ด้วย wordlist เช่น SecLists `common.txt` → เจอ `/_baks/`
4. Server เปิด **Directory Listing** → เห็นไฟล์สำรอง
5. เปิด `config.php.bak` → เจอ Flag ใน config dump

```
Maintenance → Enum → /_baks/ → config.php.bak → FLAG
```

</details>