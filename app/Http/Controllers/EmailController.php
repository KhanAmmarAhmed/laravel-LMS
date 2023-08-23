<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Mail\FormMail;

class EmailController extends Controller
{
    public function open_form()
    {
        return view('mails.mail_form');
    }

    public function send_mail(Request $request)
    {
        $emails = [
            'email' => $request->input('email'),
            'cc' => $request->input('cc'),
            'bcc' => $request->input('bcc'),
        ];

        $details = [
            'subject' => $request->input('subject'),
            'body' => $request->input('details'),
        ];

        // Get the uploaded files
        $attachments = $request->file('attachment');

        // Array to store attachment paths
        $attachmentPaths = [];

        // Process each uploaded file
        if ($attachments) {
            foreach ($attachments as $attachment) {
                // Move the uploaded file to a temporary location
                $attachmentPath = $attachment->store('temp');

                // Get the full path of the attachment
                $attachmentFullPath = Storage::path($attachmentPath);

                // Add the attachment path to the array
                $attachmentPaths[] = $attachmentFullPath;
            }
        }

        // Send the email with attachments
        Mail::to($emails['email'])->send(new FormMail($details, $attachmentPaths));

        // Delete the temporary files after the email is sent
        if (!empty($attachmentPaths)) {
            Storage::delete($attachmentPaths);
        }

        return redirect('mail_form')->with('status', 'Email Sent Successfully!');
    }
}
