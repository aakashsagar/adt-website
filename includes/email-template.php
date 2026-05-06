<?php
function buildEmailHtml(string $subject, string $badgeLabel, array $fields, string $message): string {
    $now          = date('d M Y, h:i A') . ' IST';
    $rawPhone     = $fields['Phone'] ?? $fields['WhatsApp'] ?? '';
    $userPhone    = htmlspecialchars($rawPhone);
    $phoneHint    = $userPhone
        ? ", or call the user at <strong>{$userPhone}</strong>"
        : '';
    $rows  = '';
    foreach ($fields as $label => $value) {
        if ($value === '' || $value === null) continue;
        $value = htmlspecialchars($value);
        $rows .= "
        <tr>
          <td style='padding:10px 0;border-bottom:1px solid #f1f5f9;vertical-align:top;width:38%'>
            <span style='font-size:11px;font-weight:700;color:#94a3b8;text-transform:uppercase;letter-spacing:0.8px'>{$label}</span>
          </td>
          <td style='padding:10px 0 10px 16px;border-bottom:1px solid #f1f5f9;vertical-align:top'>
            <span style='font-size:14px;color:#1e293b;font-weight:500'>{$value}</span>
          </td>
        </tr>";
    }

    $msgHtml = nl2br(htmlspecialchars($message));

    return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>{$subject}</title>
</head>
<body style="margin:0;padding:0;background:#eef2f7;font-family:'Segoe UI',Arial,Helvetica,sans-serif">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#eef2f7;padding:36px 16px">
<tr><td align="center">
<table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%">

  <!-- ── HEADER ── -->
  <tr><td style="background:linear-gradient(135deg,#7c3aed 0%,#1a56db 100%);border-radius:18px 18px 0 0;padding:0;overflow:hidden">
    <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td style="padding:32px 36px 28px">
          <!-- Logo row -->
          <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <td>
                <div style="font-family:'Segoe UI',Arial,sans-serif;font-size:20px;font-weight:800;color:#fff;letter-spacing:-0.3px">
                  Ananta<span style="opacity:.75">drishti</span> Technologies
                </div>
                <div style="font-size:11px;color:rgba(255,255,255,.6);margin-top:2px;letter-spacing:1px;text-transform:uppercase">Pvt. Ltd. · Lucknow, India</div>
              </td>
              <td align="right" style="vertical-align:top">
                <span style="display:inline-block;background:rgba(255,255,255,.18);border:1px solid rgba(255,255,255,.3);border-radius:50px;padding:5px 14px;font-size:11px;font-weight:700;color:#fff;letter-spacing:.5px">{$badgeLabel}</span>
              </td>
            </tr>
          </table>
          <!-- Divider -->
          <div style="height:1px;background:rgba(255,255,255,.15);margin:20px 0"></div>
          <!-- Subject -->
          <div style="font-size:22px;font-weight:800;color:#fff;line-height:1.3">{$subject}</div>
          <div style="font-size:12px;color:rgba(255,255,255,.65);margin-top:6px">Received on {$now}</div>
        </td>
      </tr>
    </table>
  </td></tr>

  <!-- ── BODY ── -->
  <tr><td style="background:#fff;padding:32px 36px">

    <!-- Field table -->
    <table width="100%" cellpadding="0" cellspacing="0">
      {$rows}
    </table>

    <!-- Message block -->
    <div style="margin-top:24px;background:#f8fafd;border-left:4px solid #1a56db;border-radius:0 12px 12px 0;padding:18px 20px">
      <div style="font-size:11px;font-weight:700;color:#1a56db;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px">Message</div>
      <div style="font-size:14px;color:#334155;line-height:1.75">{$msgHtml}</div>
    </div>

    <!-- Action hint -->
    <div style="margin-top:28px;background:linear-gradient(135deg,rgba(124,58,237,.06),rgba(26,86,219,.06));border-radius:12px;padding:16px 20px">
      <div style="font-size:13px;color:#475569;line-height:1.6">
        💡 <strong style="color:#1e293b">Reply directly</strong> to this email to respond to the enquiry{$phoneHint}.
      </div>
    </div>

  </td></tr>

  <!-- ── FOOTER ── -->
  <tr><td style="background:#1e293b;border-radius:0 0 18px 18px;padding:24px 36px">
    <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td>
          <div style="font-size:13px;font-weight:700;color:#fff;margin-bottom:4px">Anantadrishti Technologies Pvt. Ltd.</div>
          <div style="font-size:11px;color:#64748b;line-height:1.7">
            Indira Nagar, Lucknow – 226016, U.P., India<br>
            📞 0522-4056487 &nbsp;·&nbsp; +91 9140668001<br>
            ✉️ info@anantdrishti.com
          </div>
        </td>
        <td align="right" style="vertical-align:top">
          <div style="font-size:10px;color:#475569;text-align:right;line-height:1.8">
            This email was generated<br>automatically by the website.<br>
            <a href="https://www.anantdrishti.com" style="color:#1a56db;text-decoration:none">www.anantdrishti.com</a>
          </div>
        </td>
      </tr>
    </table>
  </td></tr>

</table>
</td></tr>
</table>
</body>
</html>
HTML;
}
