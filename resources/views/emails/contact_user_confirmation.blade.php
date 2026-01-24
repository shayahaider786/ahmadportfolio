<div style="background: #f4f4f4; padding: 40px 0; font-family: Arial, sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
    <tr>
      <td style="padding: 32px 32px 16px 32px; text-align: center; background: #4f8cff; border-radius: 8px 8px 0 0;">
        <h1 style="color: #fff; margin: 0; font-size: 2rem; letter-spacing: 1px;">Thank You for Contacting Us!</h1>
      </td>
    </tr>
    <tr>
      <td style="padding: 24px 32px 0 32px; color: #222;">
        <p style="font-size: 1.1rem; margin-bottom: 16px;">Dear <strong>{{ $contact->name }}</strong>,</p>
        <p style="font-size: 1rem; margin-bottom: 24px;">We have received your message and will get back to you as soon as possible. Thank you for reaching out to us!</p>
        <div style="background: #f0f4ff; border-left: 4px solid #4f8cff; padding: 16px 20px; margin-bottom: 24px; border-radius: 4px;">
          <p style="margin: 0 0 8px 0; color: #4f8cff; font-weight: bold;">Your Message:</p>
          <p style="margin: 0; color: #222;">{{ $contact->message }}</p>
        </div>
        <p style="font-size: 1rem; color: #555;">If you have any urgent questions, feel free to reply to this email.</p>
      </td>
    </tr>
    <tr>
      <td style="padding: 24px 32px 32px 32px; text-align: center; color: #888; font-size: 0.95rem;">
        <p style="margin: 0 0 8px 0;">Best regards,</p>
        <p style="margin: 0; font-weight: bold; color: #4f8cff;">Ahmad Team</p>
        <hr style="margin: 24px 0 8px 0; border: none; border-top: 1px solid #eee;">
        <p style="margin: 0; font-size: 0.9rem; color: #bbb;">&copy; {{ date('Y') }} Ahmad. All rights reserved.</p>
      </td>
    </tr>
  </table>
</div>
