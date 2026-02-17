import os

index_file = 'packages/index.html'
new_content_file = 'packages/new_gallery.html'

try:
    with open(index_file, 'r', encoding='utf-8') as f:
        lines = f.readlines()

    with open(new_content_file, 'r', encoding='utf-8') as f:
        new_content = f.read()

    # Replace lines 35-203 with new_content
    # Indices: lines[34] is line 35. lines[203] is line 204.
    # We want to keep lines[:34] (0-33) and lines[203:] (203-end)
    # Line 34 is '<!-- PDF GALLERY GRID ... -->' - Keeping it.
    
    # Verify line 34 content (just in case)
    print(f"Line 34 content: {lines[33]}")
    print(f"Line 35 content (removing): {lines[34]}")
    print(f"Line 203 content (removing): {lines[202]}")
    print(f"Line 204 content (keeping): {lines[203]}")

    output = lines[:34] + [new_content] + lines[203:]

    with open(index_file, 'w', encoding='utf-8') as f:
        f.writelines(output)

    print("Modification complete.")
except Exception as e:
    print(f"Error: {e}")
