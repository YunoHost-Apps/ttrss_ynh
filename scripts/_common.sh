#
# Common variables
#

APPNAME="ttrss"

# ttrss version, use latest commit found here: https://tt-rss.org/fox/tt-rss/commits/master
VERSION="09628e1b1a"

# Remote URL to fetch ttrss tarball
TTRSS_BINARY_URL="https://git.tt-rss.org/git/tt-rss/archive/${VERSION}.zip"

#
# Common helpers
#

# Download and extract ttrss binary to the given directory
# usage: extract_ttrss DESTDIR
extract_ttrss() {
  local DESTDIR=$1
  local TMPDIR=$(mktemp -d)

  # retrieve and extract ttrss tarball
  ttrss_tarball="/tmp/ttrss.zip"
  rm -f "$ttrss_tarball"
  wget -q -O "$ttrss_tarball" "$TTRSS_BINARY_URL" \
    || ynh_die "Unable to download ttrss tarball"
  unzip -q "$ttrss_tarball" -d "$TMPDIR" \
    || ynh_die "Unable to extract ttrss tarball"
  sudo rsync -a "$TMPDIR"/tt-rss*/* "$DESTDIR"
  rm -rf "$ttrss_tarball" "$TMPDIR"
}
