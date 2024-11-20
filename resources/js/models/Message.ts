export interface Message {
    id: number,
    message: string,
    sender_id: number,
    created_at: string,
    is_read: boolean,
    deleted_at: string | null,
    edited_at: string | null,
    file: string | null,
    filetype: string | null
}
